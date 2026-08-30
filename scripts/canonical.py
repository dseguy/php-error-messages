#!/usr/bin/env python3
import pathlib, re, sys

BASE = "https://php-errors.readthedocs.io/en/latest/"
SKIP = {"404.html", "print.html"}
root = pathlib.Path(sys.argv[1] if len(sys.argv) > 1 else "book")

# Mirrors the PHP str_replace(['%', '(', ')', '#'], ['p', 'q', 'r', 's'], $name)
# used elsewhere in the build to sanitize message names into filenames.
SLUG_MAP = str.maketrans({"%": "p", "(": "q", ")": "r", "#": "s"})

for html in root.rglob("*.html"):
    rel = html.relative_to(root).as_posix()
    if rel in SKIP:
        continue
    if rel == "index.html" or rel.endswith("/index.html"):
        rel = rel[: -len("index.html")]
    rel = rel.translate(SLUG_MAP)
    # The on-disk filename can still contain a literal '?' (mirrors PHP's
    # makeUrlSafe() in make.php). Left raw in a URL it truncates the path
    # into a query string, breaking the self-referencing canonical link.
    rel = rel.replace("?", "%3F")
    page_url = f"{BASE}{rel}"
    tag = f'<link rel="canonical" href="{page_url}">'
    text = html.read_text(encoding="utf-8")
    if 'rel="canonical"' in text:
        text = re.sub(r'<link rel="canonical"[^>]*>', tag, text, count=1)
    else:
        text = text.replace("</head>", f"    {tag}\n</head>", 1)
    # og:url mirrors the same bug class: theme/head.hbs has no mdBook
    # variable for the rendered .html path, only {{ path }} (raw .md
    # source path), so it's fixed up here from the same slug this script
    # already computes for the canonical link.
    text = re.sub(
        r'(<meta property="og:url" content=")[^"]*(">)',
        rf'\g<1>{page_url}\g<2>',
        text,
        count=1,
    )
    html.write_text(text, encoding="utf-8")