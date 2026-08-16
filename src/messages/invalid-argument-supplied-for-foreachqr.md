# Invalid argument supplied for foreach()

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/invalid-argument-supplied-for-foreach().html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/invalid-argument-supplied-for-foreach().html","name":"Invalid argument supplied for foreach()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"foreach() works on arrays or objects","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/invalid-argument-supplied-for-foreach().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
foreach() works on arrays or objects. For the array, all the elements of the array are read; for the objects, it is either the public properties, read like an array, or the Iterator interface, which uses specific methods. 

Then, any other type is forbidden to be used with foreach(). This means all scalars elements, including string, integer and null.

## Example

```php
<?php

foreach(1234 as $b) {
	echo $b;
}

?>
```

## Alternatives
+ Check that the source of the foreach can be used with is_iterable().

In more recent PHP versions, this error message is now :ref:`foreach()-argument-must-be-of-type-array|object`.