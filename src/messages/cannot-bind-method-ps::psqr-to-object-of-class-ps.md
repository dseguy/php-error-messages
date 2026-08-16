# Cannot bind method %s::%s() to object of class %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-bind-method-%s::%s()-to-object-of-class-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-bind-method-%s::%s()-to-object-of-class-%s.html","name":"Cannot bind method %s::%s() to object of class %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 16:26:10 +0000","dateModified":"Wed, 15 Jul 2026 16:26:10 +0000","description":"This error is reported when a closure is called on an object which is not identical to the the type of the original object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-bind-method-%s::%s()-to-object-of-class-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error is reported when a closure is called on an object which is not identical to the the type of the original object.

## Example

```php
<?php

class X {
    public function method() {    }
}

class Y { }

$closure = Closure::fromCallable([new X, 'method']);
$closure->call(new B);

?>
```

## Literal Examples
+ Cannot bind method A::M() to object of class C

## Alternatives
+ Make sure the new object is of the same type as the original support one.

## Related error messages
+ [cannot-bind-method-%s::%s()-to-object-of-class-%s,-this-will-be-an-error-in-php-9](cannot-bind-method-%s::%s\(\)-to-object-of-class-%s,-this-will-be-an-error-in-php-9.html)

In more recent PHP versions, this error message is now :ref:`cannot-bind-method-%s::%s()-to-object-of-class-%s,-this-will-be-an-error-in-php-9`.