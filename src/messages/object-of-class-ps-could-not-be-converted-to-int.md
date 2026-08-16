# Object of class %s could not be converted to int

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/object-of-class-%s-could-not-be-converted-to-int.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/object-of-class-%s-could-not-be-converted-to-int.html","name":"Object of class %s could not be converted to int","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-01-15T16:37:04+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"PHP reports that the object cannot be used as an integer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/object-of-class-%s-could-not-be-converted-to-int.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP reports that the object cannot be used as an integer. Converting an object into a int is only possible when the underlying class has provided the code for it. There is no userland code to do that, such as a magic code: it is only possible via a call to a method that returns an integer.

Among the PHP classes, `gmp` and `bcmath` (in PHP 8.4) extensions provide classes which also works with math operations. Most of the other classes do not convert easily to numbers, as it makes little sense to convert a database connexion (for example) into a number.

## Example

```php
<?php

class Y { }

// Error!
echo new Y + 1; 

$multiplication = gmp_mul('12', 3);

print $multiplication * 4; // 144

$number = new BcMath\Number('1.234');

$addition = $number->add(new BcMath\Number('2.34567'));

print $addition + 1; // 4.57967

?>
```

## Literal Examples
+ Object of class Y could not be converted to int
+ Object of class Datetime could not be converted to int

## Alternatives
+ Implement tod that returns an integer, on that object.
+ Upgrade to PHP 8.4, to use automatic conversion with ``bcmath``.

## Related error messages
+ [object-of-class-%s-could-not-be-converted-to-bool](object-of-class-%s-could-not-be-converted-to-bool.html)
+ [object-of-class-%s-could-not-be-converted-to-float](object-of-class-%s-could-not-be-converted-to-float.html)
+ [object-of-class-%s-could-not-be-converted-to-string](object-of-class-%s-could-not-be-converted-to-string.html)
