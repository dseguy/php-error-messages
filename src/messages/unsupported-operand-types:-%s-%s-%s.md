# Unsupported operand types: %s %s %s

## Description
This error is reported when the types of the operands are valid (here, `int` and `string`), but they are not compatible one another. It is possible to use the `&` operator with two integers, or with two strings but not with one string and one integer.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unsupported-operand-types:-%s-%s-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unsupported-operand-types:-%s-%s-%s.html","name":"Unsupported operand types: %s %s %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"This error is reported when the types of the operands are valid (here, ``int`` and ``string``), but they are not compatible one another","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unsupported-operand-types:-%s-%s-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

1 & 'B'; 

?>
```

## Literal Examples
+ Unsupported operand types: int & string

## Alternatives
+ Make both sides of the operator the same type.
