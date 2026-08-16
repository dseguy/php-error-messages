# No ending delimiter '%c' found

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/no-ending-delimiter-'%c'-found.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/no-ending-delimiter-'%c'-found.html","name":"No ending delimiter '%c' found","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"This error is a regex related error, not a PHP one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/no-ending-delimiter-'%c'-found.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error is a regex related error, not a PHP one. The regular expression is the first argument of the call. It is invalid, as regex are supposed to start and end with the same non-alphanumeric character. 

Then, PHP stops the process, and returns false. In this case, false may be confused with a failure to find the pattern in the string, and yield unexpected results.

## Example

```php
<?php

preg_match('/[a-b]', 'abc');

?>
```

## Literal Examples
+ No ending delimiter '/' found

## Alternatives
+ Fix the regex.

## Related error messages
+ [delimiter-must-not-be-alphanumeric,-backslash,-or-nul-byte](delimiter-must-not-be-alphanumeric,-backslash,-or-nul-byte.html)
+ [delimiter-must-not-be-alphanumeric,-backslash,-or-nul](delimiter-must-not-be-alphanumeric,-backslash,-or-nul.html)
+ [delimiter-must-not-be-alphanumeric-or-backslash](delimiter-must-not-be-alphanumeric-or-backslash.html)

## Related error messages
+ [PCREPatterns](https://www.php.net/manual/en/pcre.pattern.php)
