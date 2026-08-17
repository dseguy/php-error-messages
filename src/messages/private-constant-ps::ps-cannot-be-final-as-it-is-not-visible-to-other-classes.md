# Private constant %s::%s cannot be final as it is not visible to other classes

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/private-constant-ps::ps-cannot-be-final-as-it-is-not-visible-to-other-classes.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/private-constant-ps::ps-cannot-be-final-as-it-is-not-visible-to-other-classes.html","name":"Private constant %s::%s cannot be final as it is not visible to other classes","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-01-03T11:11:43+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"A ``private`` constant is restricted to being used by its definition class only: as such, it is not visible to other classes, including children","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/private-constant-ps::ps-cannot-be-final-as-it-is-not-visible-to-other-classes.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A `private` constant is restricted to being used by its definition class only: as such, it is not visible to other classes, including children. A `final` class constant cannot be overwritten by a child class. 

`private` and `final` a both mutually exclusive.

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
