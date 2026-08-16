# Class %s cannot implement both Iterator and IteratorAggregate at the same time

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-%s-cannot-implement-both-iterator-and-iteratoraggregate-at-the-same-time.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-%s-cannot-implement-both-iterator-and-iteratoraggregate-at-the-same-time.html","name":"Class %s cannot implement both Iterator and IteratorAggregate at the same time","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"This error appears when a class uses two or more interfaces, which are incompatible with one another","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-%s-cannot-implement-both-iterator-and-iteratoraggregate-at-the-same-time.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error appears when a class uses two or more interfaces, which are incompatible with one another. The incompatibility is based on name conflicts: two interfaces have a method with the same name.

There is a distinct error for constants. There is the same message for properties, since PHP 8.4.

## Example

```php
<?php

class A implements Iterator, IteratorAggregate {}

?>
```

## Literal Examples
+ Class A cannot implement both Iterator and IteratorAggregate at the same time

## Alternatives
+ Choose one or the other interface.
+ Use the interface that is compatible with the parent classes.

## Related error messages
+ [%s-%s-inherits-both-%s::%s-and-%s::%s](%s-%s-inherits-both-%s::%s-and-%s::%s.html)
