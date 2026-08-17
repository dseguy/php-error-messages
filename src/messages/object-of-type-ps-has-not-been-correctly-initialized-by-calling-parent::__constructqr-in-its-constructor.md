# Object of type %s has not been correctly initialized by calling parent::__construct() in its constructor

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/object-of-type-ps-has-not-been-correctly-initialized-by-calling-parent::__constructqr-in-its-constructor.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/object-of-type-ps-has-not-been-correctly-initialized-by-calling-parent::__constructqr-in-its-constructor.html","name":"Object of type %s has not been correctly initialized by calling parent::__construct() in its constructor","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-06-03T23:13:10+02:00","dateModified":"2026-03-31T11:06:56+02:00","description":"PHP needs an explicit call to the parent constructor to init the parent class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/object-of-type-ps-has-not-been-correctly-initialized-by-calling-parent::__constructqr-in-its-constructor.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP needs an explicit call to the parent constructor to init the parent class. Sometimes, overwritten constructor is an expected features. With PHP native classes, `Datetime` and `Datetimezone` must be explicitly called when extended. 

Note that this error is only raised when the object is used, and not at instantiation time.

## Example

```php
<?php

class X extends DateTime {
	public function __construct() { }
}

$object = new X;
var_dump(object->format("d"));
?>
```

## Literal Examples
+ Object of type X has not been correctly initialized by calling parent::__construct() in its constructor

## Alternatives
+ Add a call to the parent __construct() method.
