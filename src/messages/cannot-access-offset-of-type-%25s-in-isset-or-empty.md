# Cannot access offset of type %s in isset or empty

## Description
In an array notation, the offset may be a variable, or any container. Yet, it must be a string or an integer; and when applied to an string, it must be an integer.

This error is reported when a value which type is not cast to integer (such as `null`, `boolean`, `float`) or string is used. Here, it is an object. 

It is also a specific message, emitted when the error happens as an argument of `isset` or `empty`. Both function have an error suppression feature, and yet, this error is reported.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-access-offset-of-type-%s-in-isset-or-empty.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-access-offset-of-type-%s-in-isset-or-empty.html","name":"Cannot access offset of type %s in isset or empty","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"In an array notation, the offset may be a variable, or any container","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-access-offset-of-type-%s-in-isset-or-empty.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

// illustration example
$object = new Stdclass;
$string = 'abc';

echo isset($string[$object]);

?>
```

## Literal Examples
+ Cannot access offset of type stdClass in isset or empty

## Alternatives
+ Check the type of the index before using it in the array notation.
+ Check the type of the underlying object, using the array notation.
+ Cast the index to ``(string)`` or ``(int)`` when using it in the array notation.

## Related error messages
+ [illegal-offset-type](illegal-offset-type.html)
+ [illegal-offset-type-in-unset](illegal-offset-type-in-unset.html)
+ [illegal-offset-type-in-isset-or-empty](illegal-offset-type-in-isset-or-empty.html)
