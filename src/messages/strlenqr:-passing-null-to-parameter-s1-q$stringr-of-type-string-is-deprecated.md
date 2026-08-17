# strlen(): Passing null to parameter #1 ($string) of type string is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/strlenqr:-passing-null-to-parameter-s1-q$stringr-of-type-string-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/strlenqr:-passing-null-to-parameter-s1-q$stringr-of-type-string-is-deprecated.html","name":"strlen(): Passing null to parameter #1 ($string) of type string is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-09-18T06:57:58+02:00","dateModified":"2025-09-19T22:03:43+02:00","description":"``strlen()`` calculates the length of a string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/strlenqr:-passing-null-to-parameter-s1-q$stringr-of-type-string-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`strlen()` calculates the length of a string. It only works on strings, and, in particular, cannot compute the length of the `null` value.

## Example

```php
<?php

$s = null;
print strlen($s); 

?>
```

## Alternatives
+ Process ``null`` in a separate branch of code.
+ Convert ``null`` to the empty string before using strlen().
