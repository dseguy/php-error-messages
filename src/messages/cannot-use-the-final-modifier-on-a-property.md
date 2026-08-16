# Cannot use the final modifier on a property

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-the-final-modifier-on-a-property.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-the-final-modifier-on-a-property.html","name":"Cannot use the final modifier on a property","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-09-28T11:25:51+02:00","dateModified":"2025-11-23T22:22:32+01:00","description":"When a property is final, it cannot be overridden in a child class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-the-final-modifier-on-a-property.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
When a property is final, it cannot be overridden in a child class; when a class is private, it is only available in the current class. 

Hence, a property cannot be final and private at the same time. 

In this situation, the property may not final, as there are no property hooks.

## Example

```php
<?php

class X {
	final private $property;
}

?>
```

## Alternatives
+ Remove the hooks, and use the magic methods __get/__set.
+ Remove the final keyword.
+ Remove the private keyword and use protected or public.

In more recent PHP versions, this error message is now :ref:`property-cannot-be-both-final-and-private`.