# Delimiter must not be alphanumeric or backslash

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/delimiter-must-not-be-alphanumeric-or-backslash.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/delimiter-must-not-be-alphanumeric-or-backslash.html","name":"Delimiter must not be alphanumeric or backslash","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-01-12T10:44:57+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"The first character of a regex is the delimiter, that delimits the regex","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/delimiter-must-not-be-alphanumeric-or-backslash.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The first character of a regex is the delimiter, that delimits the regex. There is a first and a last delimiter. 

In the case of this error, the first regex character is of invalid type. It cannot be alphanumeric (a-z, A-Z and digits), nore the backslash `\`. 

Note that if the first characters are white spaces, such as space, tabulation, new line, they are ignored as potential delimiter.

Later, the NUL character (`chr(0)`) was added to the list of the forbidden characters.

## Example

```php
<?php

preg_match('a[bc]a', 'abc');

?>
```

## Alternatives
+ Use a non-alphanumeric character, like ``/``, ``#``.

## Related error messages
+ [no-ending-delimiter-'%c'-found](no-ending-delimiter-%c-found.html)

## Related error messages
+ [PCREPatterns](https://www.php.net/manual/en/pcre.pattern.php)

In more recent PHP versions, this error message is now :ref:`delimiter-must-not-be-alphanumeric,-backslash,-or-nul`.