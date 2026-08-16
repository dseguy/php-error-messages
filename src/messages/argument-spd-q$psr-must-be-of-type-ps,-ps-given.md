# Argument #%d ($%s) must be of type %s, %s given

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/argument-#%d-($%s)-must-be-of-type-%s,-%s-given.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/argument-#%d-($%s)-must-be-of-type-%s,-%s-given.html","name":"Argument #%d ($%s) must be of type %s, %s given","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"This error is emitted when data of a wrong type is given to a typed argument","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/argument-#%d-($%s)-must-be-of-type-%s,-%s-given.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error is emitted when data of a wrong type is given to a typed argument. 

The first parameter that fails the type constraint is reported. There might be other type failures after this one, though they are hidden by the first one encountered.

## Example

```php
<?php

function foo(int $x) {}

foo(1); // OK

foo('2'); // OK, with strict_types = 0 

foo('abc'); // not OK

?>
```

## Literal Examples
+ Argument #1 ($x) must be of type int, string given

## Alternatives
+ Pass the correct argument to the method.
+ Cast the value to the requested type.
+ Change the type in the signature of the called method.
+ Add the type in the signature of the called method.

## Related error messages
+ [using-array_key_exists()-on-objects-is-deprecated.](using-array\_key\_exists\(\)-on-objects-is-deprecated..html)
+ [must-be-a-callable,-null-given](must-be-a-callable,-null-given.html)

In previous PHP versions, this error message used to be :ref:`using-array_key_exists()-on-objects-is-deprecated.`.
In more recent PHP versions, this error message is now :ref:`passing-the-encoding-as-third-parameter-is-deprecated.-use-an-explicit-zero-offset`.