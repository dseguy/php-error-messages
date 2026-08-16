# Private methods cannot be final as they are never overridden by other classes

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/private-methods-cannot-be-final-as-they-are-never-overridden-by-other-classes.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/private-methods-cannot-be-final-as-they-are-never-overridden-by-other-classes.html","name":"Private methods cannot be final as they are never overridden by other classes","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-01-27T19:23:52+01:00","dateModified":"2025-08-12T22:40:47+02:00","description":"Final methods are only available in the class where they are defined","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/private-methods-cannot-be-final-as-they-are-never-overridden-by-other-classes.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Final methods are only available in the class where they are defined. If such a method is defined in one of the child class, it is considered a distinct method. As such, the final keyword doesn't apply, and even is misleading.

## Example

```php
<?php

class X {
	private final function foo() {}
}

?>
```

## Alternatives
+ Remove the final keyword in the method definition.
+ Change the visibility to protected to public.
