# Trait method %s::%s has not been applied as %s::%s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/trait-method-%s::%s-has-not-been-applied-as-%s::%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/trait-method-%s::%s-has-not-been-applied-as-%s::%s.html","name":"Trait method %s::%s has not been applied as %s::%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:00:09 +0000","dateModified":"Wed, 05 Aug 2026 14:00:09 +0000","description":"Two methods with the same name were imported with two distinct traits: PHP could not decide which one to use","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/trait-method-%s::%s-has-not-been-applied-as-%s::%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Two methods with the same name were imported with two distinct traits: PHP could not decide which one to use.

## Example

```php
<?php

trait T {
    public function foo() { return 3; }
}
trait U {
    public function foo() { return 2; }
}

class Bar {
    use T, U;
}

$x = new Bar();
var_dump($x->foo());

?>
```

## Literal Examples
+ Trait method U::foo has not been applied as Bar::foo, because of collision with T::foo

## Alternatives
+ Change the name of the method in one of the trait.
+ Add aliasing when importing the traits.
+ Only use one of the trait.
+ Make one trait use the other one.

## Related error messages
+ [cannot-use--"static-"-as-method-modifier-in-trait-alias](cannot-use--static--as-method-modifier-in-trait-alias.html)
