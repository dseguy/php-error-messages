# strlen(): Passing null to parameter #1 ($string) of type string is deprecated

## Description
`strlen()` calculates the length of a string. It only works on strings, and, in particular, cannot compute the length of the `null` value.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/strlen():-passing-null-to-parameter-#1-($string)-of-type-string-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/strlen():-passing-null-to-parameter-#1-($string)-of-type-string-is-deprecated.html","name":"strlen(): Passing null to parameter #1 ($string) of type string is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"``strlen()`` calculates the length of a string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/strlen():-passing-null-to-parameter-#1-($string)-of-type-string-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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
