# Cannot declare promoted property outside a constructor

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-declare-promoted-property-outside-a-constructor.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-declare-promoted-property-outside-a-constructor.html","name":"Cannot declare promoted property outside a constructor","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"A promoted property is the declaration of a property, as part of the signature of the constructor","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-declare-promoted-property-outside-a-constructor.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A promoted property is the declaration of a property, as part of the signature of the constructor. It is detected with the use of private, protected and public keyword, in the parameter signature. When these keyword are found in the signature of a method that is not the constructor, PHP emits this error.

## Example

```php
<?php

class X {
	function foo(private int $p) {
	
	}
}

?>
```

## Alternatives
+ Remove the private, protected or public keyword.
+ Rename the method __construct, to make it the constructor.
+ Move that parameter to the constructor.
