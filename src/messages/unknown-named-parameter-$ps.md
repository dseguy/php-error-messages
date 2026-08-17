# Unknown named parameter $%s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unknown-named-parameter-$ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unknown-named-parameter-$ps.html","name":"Unknown named parameter $%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-12-18T23:13:01+01:00","dateModified":"2026-03-31T11:06:56+02:00","description":"Named parameters are the parameters of the function, or method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unknown-named-parameter-$ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Named parameters are the parameters of the function, or method. Their actual name is the name of the variable, without the leading `$` sign. 

With named parameters, the case is important, just like with variables.

## Example

```php
<?php

    function foo($a, $b) {}

    foo(c: 1);

?>
```

## Literal Examples
+ Unknown named parameter $c

## Alternatives
+ Check the case of the parameter.
+ Check the signature of the method to see if that parameter actually exists.
+ Add the parameter to the method signature.
+ Remove the name in the method call, and rely on positional arguments.
+ Check the actual method definition: interfaces have precedence, then in the class hierarchy, it is the last defined method, in class or trait.
