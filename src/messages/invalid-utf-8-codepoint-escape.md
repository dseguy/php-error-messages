# Invalid UTF-8 codepoint escape

## Description
PHP supports unicode as escape sequence. They are used in double-quoted strings, and use the `\u{73}` format. The digits must represent a valid unicode codepoint: here, 73 represents the ASCII letter `s`.

When the prefix `\u{` is detected, PHP tries to understand the next characters as an integer. When this is not the case, it fails the codepoint detection and stops.

In particular, it is not possible to use the `_` number separator in these sequences.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/invalid-utf-8-codepoint-escape.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/invalid-utf-8-codepoint-escape.html","name":"Invalid UTF-8 codepoint escape","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"PHP supports unicode as escape sequence","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/invalid-utf-8-codepoint-escape.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

    $a = "\u{fgh}";

    echo \u{1F4_18};

?>
```

## Alternatives
+ Check the values inside the curly braces: chances are it needs to be replaced with smaller values.
+ If there is no intent to use unicode codepoint, add ``\`` to make PHP handle it as a literal value.

## Related error messages
+ [invalid-utf-8-codepoint-escape:-codepoint-too-large](invalid-utf-8-codepoint-escape:-codepoint-too-large.html)

## Related error messages
+ [Doublequoted](https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.double)
