# Cannot use %s as value for class constant %s::%s of type %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-%s-as-value-for-class-constant-%s::%s-of-type-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-%s-as-value-for-class-constant-%s::%s-of-type-%s.html","name":"Cannot use %s as value for class constant %s::%s of type %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"This error appears when there is a mismatch between the value of a constant, and its declared type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-%s-as-value-for-class-constant-%s::%s-of-type-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error appears when there is a mismatch between the value of a constant, and its declared type.

Note that there is not type juggling, so the value of the constant must match the type exactly. Consider that `strict_types` always applies in this case.

## Example

```php
<?php

class X {
    const int A = 'abc';
    const int B = '123';
    const int C = 3, D = 'abc';
}

?>
```

## Alternatives
+ Remove the constant type.
+ Replace the constant type.
+ Replace the constant value.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()