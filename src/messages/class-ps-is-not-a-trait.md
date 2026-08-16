# Class %s is not a trait, Only traits may be used in 'as' and 'insteadof' statements

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-%s-is-not-a-trait.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-%s-is-not-a-trait.html","name":"Class %s is not a trait, Only traits may be used in 'as' and 'insteadof' statements","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-09-21T15:16:27+02:00","dateModified":"2025-02-16T12:47:22-05:00","description":"It is not possible to use a class name in a use block: the block only uses traits information","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-%s-is-not-a-trait.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
It is not possible to use a class name in a use block: the block only uses traits information. 

The class method have priority over the trait methods, so there is no need to explicitly solve such conflict. On the other hand, when the trait has to have priority, it has to be specified as such, using a trait name. 

Any method defined in a parent class is assimilated to the current class, and has priority.

## Example

```php
<?php

class X {}

trait T {}

class Y extends X {
	use T{ X::foo instead of T; }; 
}
?>
```

## Literal Examples
+ Class x is not a trait, Only traits may be used in 'as' and 'insteadof' statements

## Alternatives
+ Remove the use block entry that mentions the class.
+ Fix the name of the class, with the name of a trait.
