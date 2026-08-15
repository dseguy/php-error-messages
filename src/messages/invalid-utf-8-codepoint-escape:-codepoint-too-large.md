# Invalid UTF-8 codepoint escape: Codepoint too large

## Description
PHP supports unicode as escape sequence. They are used in double-quoted strings, and use the `\u{73}` format. The digits must represent a valid unicode codepoint: here, 73 represents the ASCII letter `s`.

When a valid escape sequence is detected, PHP use the integer between the curly braces. Unicode comprises 1,114,112 code points in the range 0 to 10FFFF. Beyond that value, codepoint are undefined, and do not represent anything anymore.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/invalid-utf-8-codepoint-escape:-codepoint-too-large.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/invalid-utf-8-codepoint-escape:-codepoint-too-large.html","name":"Invalid UTF-8 codepoint escape: Codepoint too large","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"PHP supports unicode as escape sequence","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/invalid-utf-8-codepoint-escape:-codepoint-too-large.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php
  $a = "\u{ffffff}";
?>
```

## Alternatives
+ Check the values inside the curly braces: chances are it needs to be replaced with smaller values.

## Related error messages
+ [invalid-utf-8-codepoint-escape](asdf)

## Related error messages
+ [Doublequoted](https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.double)
