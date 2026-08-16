# Passing the encoding as third parameter is deprecated. Use an explicit zero offset

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-the-encoding-as-third-parameter-is-deprecated.-use-an-explicit-zero-offset.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-the-encoding-as-third-parameter-is-deprecated.-use-an-explicit-zero-offset.html","name":"Passing the encoding as third parameter is deprecated. Use an explicit zero offset","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"PHP used to recognize automatically the third parameter when it was actually the encoding, and noth the offset of start","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-the-encoding-as-third-parameter-is-deprecated.-use-an-explicit-zero-offset.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP used to recognize automatically the third parameter when it was actually the encoding, and noth the offset of start. The latter is an integer, while the former is a string. 

In PHP 8.0, it is now a normal type error.

## Example

```php
<?php

// Valid in PHP 7.x
echo mb_strrpos('abc', 'a', 'utf8');

// Valid in PHP 8.+
echo mb_strrpos('abc', 'a', 0, 'utf8');
echo mb_strrpos('abc', 'a', encoding: 'utf8');

?>
```

## Alternatives
+ Use named parameters.
+ Add a 0 as third parameter (the default value for offset).

In more recent PHP versions, this error message is now :ref:`argument-#%d-($%s)-must-be-of-type-%s,-%s-given`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[mb_strrpos](mb_strrpos)