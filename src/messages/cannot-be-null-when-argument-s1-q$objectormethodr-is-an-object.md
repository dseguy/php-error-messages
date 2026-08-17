# cannot be null when argument #1 ($objectOrMethod) is an object

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-be-null-when-argument-s1-q$objectormethodr-is-an-object.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-be-null-when-argument-s1-q$objectormethodr-is-an-object.html","name":"cannot be null when argument #1 ($objectOrMethod) is an object","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-01-25T13:15:40+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"The ReflectionMethod class requires 2 argument: the first with the class, and the second with the method name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-be-null-when-argument-s1-q$objectormethodr-is-an-object.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The ReflectionMethod class requires 2 argument: the first with the class, and the second with the method name. Passing one argument is deprecated.

## Example

```php
<?php

$x = new X();
$method = new ReflectionMethod($x);

?>
```

## Alternatives
+ Adds the name as second argument ``method``.

## Related error messages
+ [must-be-a-valid-method-name](must-be-a-valid-method-name.html)
