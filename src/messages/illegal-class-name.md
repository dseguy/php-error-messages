# Illegal class name

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/illegal-class-name.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/illegal-class-name.html","name":"Illegal class name","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-05-20T11:20:31+02:00","dateModified":"2026-03-31T11:06:56+02:00","description":"Illegal class name is a compile-time error when the type of a value, used for a class is not valid","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/illegal-class-name.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Illegal class name is a compile-time error when the type of a value, used for a class is not valid. 

The expressions that use classes are the following : static method call, static property call, static constant call, and static class (`$a::class`). 

The valid types are strings, static class (`A::class`), identifiers (such as `A` or `\A`), method calls (`foo()`) that returns one of the previous types or data containers holding an object or a class name as a string. On the other hand, boolean, null, integers, float, array() are invalid; some strings are not valid, such as '4foo', though PHP only detects these are execution time, with a different error message.

This kind of error is very rare, as it prevents the code to run.

## Example

```php
<?php

array()::t;
(2)::$t;
(true)::t();

//Illegal classname, as integer cannot be a classname
strlen($string)::$property;

// This is valid until execution, where class 4f cannot be found
('4f')::$t;

?>
```

## Alternatives
+ Do not use invalid types values to access a class.

## Related error messages
+ [class-"%s"-not-found](class-%s-not-found.html)
+ [interface-"%s"-not-found](interface-%s-not-found.html)
