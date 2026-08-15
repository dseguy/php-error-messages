# Private constant %s::%s cannot be final as it is not visible to other classes

## Description
A `private` constant is restricted to being used by its definition class only: as such, it is not visible to other classes, including children. A `final` class constant cannot be overwritten by a child class. 

`private` and `final` a both mutually exclusive.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/private-constant-%s::%s-cannot-be-final-as-it-is-not-visible-to-other-classes.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/private-constant-%s::%s-cannot-be-final-as-it-is-not-visible-to-other-classes.html","name":"Private constant %s::%s cannot be final as it is not visible to other classes","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"A ``private`` constant is restricted to being used by its definition class only: as such, it is not visible to other classes, including children","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/private-constant-%s::%s-cannot-be-final-as-it-is-not-visible-to-other-classes.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
    private final const A = 1;
}

?>
```

## Literal Examples
+ Private constant C::A cannot be final as it is not visible to other classes

## Alternatives
+ Relax the private keyword with protected, or public.
+ Remove the final keyword.
