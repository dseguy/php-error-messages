# Array and string offset access syntax with curly braces is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/array-and-string-offset-access-syntax-with-curly-braces-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/array-and-string-offset-access-syntax-with-curly-braces-is-deprecated.html","name":"Array and string offset access syntax with curly braces is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"PHP used to support the curly braces ``{}`` to access elements in an array and a string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/array-and-string-offset-access-syntax-with-curly-braces-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP used to support the curly braces `{}` to access elements in an array and a string. This was deprecated in PHP 7.4 and abandoned in PHP 8.0. The only operator to access an element is the square brackets `[]`.

## Example

```php
<?php

$string = 'abc';
echo $string{1}; // b

$array = ['A', 'B', 'C'];
echo $array{1};  // B

?>
```

## Alternatives
+ Switch to the square brackets.
+ Use the substr() function to extract one string char.

In more recent PHP versions, this error message is now :ref:`array-and-string-offset-access-syntax-with-curly-braces-is-no-longer-supported`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[curly_braces](curly_braces)