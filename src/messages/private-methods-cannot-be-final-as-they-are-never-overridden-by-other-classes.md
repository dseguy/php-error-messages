# Private methods cannot be final as they are never overridden by other classes

## Description
Final methods are only available in the class where they are defined. If such a method is defined in one of the child class, it is considered a distinct method. As such, the final keyword doesn't apply, and even is misleading.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/private-methods-cannot-be-final-as-they-are-never-overridden-by-other-classes.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/private-methods-cannot-be-final-as-they-are-never-overridden-by-other-classes.html","name":"Private methods cannot be final as they are never overridden by other classes","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"Final methods are only available in the class where they are defined","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/private-methods-cannot-be-final-as-they-are-never-overridden-by-other-classes.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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
