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
    tag = f'<link rel="canonical" href="{BASE}{rel}">'
    text = html.read_text(encoding="utf-8")
    if 'rel="canonical"' in text:
        text = re.sub(r'<link rel="canonical"[^>]*>', tag, text, count=1)
    else:
        text = text.replace("</head>", f"    {tag}\n</head>", 1)
    html.write_text(text, encoding="utf-8")