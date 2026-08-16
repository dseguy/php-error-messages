# %s cannot use %s - it is not a trait

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-cannot-use-%s---it-is-not-a-trait.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-cannot-use-%s---it-is-not-a-trait.html","name":"%s cannot use %s - it is not a trait","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 13:26:42 +0000","dateModified":"Thu, 06 Aug 2026 13:26:42 +0000","description":"In a class definition, the use expression must only use traits","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-cannot-use-%s---it-is-not-a-trait.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
In a class definition, the use expression must only use traits. All other structures, such as class, interface, enum or else, are not allowed.

## Example

```php
<?php

class X {}

class Y {
	use x; 
}
?>
```

## Literal Examples
+ y cannot use x - it is not a trait

## Alternatives
+ Remove the use expression that uses the class.
+ Fix the name of the class, and use an existing trait.

## Related error messages
+ [class-%s-cannot-use-%s---it-is-not-a-trait](class-%s-cannot-use-%s---it-is-not-a-trait.html)
