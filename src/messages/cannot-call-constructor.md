# Cannot call constructor

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-call-constructor.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-call-constructor.html","name":"Cannot call constructor","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-10-08T08:57:25+02:00","dateModified":"2026-03-31T11:06:56+02:00","description":"When there is no need to define a constructor, it may be skipped","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-call-constructor.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
When there is no need to define a constructor, it may be skipped. Then, PHP creates the object without that initial method call.

On the other hand, if a child class makes an explicit call to the parent constructor, then on of the parents MUST have a constructor. 

In the example here, the child class explicitly calls the parent constructor, but it doesn't exists.

## Example

```php
<?php

class X {}

class Y extends X {
	function __construct() {
		parent::__construct();
	}
}

?>
```

## Alternatives
+ Create an empty constructure in a parent, to ensure its calling.
+ Skip the call to the parent constructor in the child: it is useless anyway.
