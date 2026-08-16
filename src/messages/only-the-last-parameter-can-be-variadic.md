# Only the last parameter can be variadic

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/only-the-last-parameter-can-be-variadic.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/only-the-last-parameter-can-be-variadic.html","name":"Only the last parameter can be variadic","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-06T15:27:15+02:00","dateModified":"2026-08-06T15:27:15+02:00","description":"A variadic parameter, marked with ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/only-the-last-parameter-can-be-variadic.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A variadic parameter, marked with `...`, collects every remaining argument passed to the function into an array. Since it consumes all the arguments left, no parameter can follow it: it must be the last one in the parameter list.

This is checked at compile time, as soon as a parameter is declared after a variadic one.

## Example

```php
<?php

function foo(...$a, $b) {}

?>
```

## Alternatives
+ Move the variadic parameter to the end of the parameter list.
+ Use named arguments instead, if the extra parameter needs to keep a fixed conceptual position.

## Related error messages
+ [variadic-parameter-cannot-have-a-default-value](variadic-parameter-cannot-have-a-default-value.html)
+ [cannot-declare-variadic-promoted-property](cannot-declare-variadic-promoted-property.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()