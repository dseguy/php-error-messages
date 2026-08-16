# Variadic parameter cannot have a default value

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/variadic-parameter-cannot-have-a-default-value.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/variadic-parameter-cannot-have-a-default-value.html","name":"Variadic parameter cannot have a default value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 11:32:09 +0000","dateModified":"Wed, 05 Aug 2026 11:32:09 +0000","description":"A variadic parameter, marked with ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/variadic-parameter-cannot-have-a-default-value.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A variadic parameter, marked with `...`, already collects zero or more arguments into an array: when no argument is passed for it, it is simply an empty array. There is no meaning in giving it a default value, since the parameter itself can never be missing from the call, only empty.

This is a compile time check.

## Example

```php
<?php

function foo(...$a = []) {}

?>
```

## Alternatives
+ Remove the default value from the variadic parameter.
+ Check inside the function body whether the collected array is empty, instead of relying on a default value.

## Related error messages
+ [only-the-last-parameter-can-be-variadic](only-the-last-parameter-can-be-variadic.html)
+ [cannot-declare-variadic-promoted-property](cannot-declare-variadic-promoted-property.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()