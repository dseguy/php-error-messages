# Typed static property %s::$%s must not be accessed before initialization

## Description
Typed static properties are undefined until they are assigned for the first time. Such happens with a default value, or at the first assignation. 

The difference with untyped values, is that PHP emits that error when the property is not typed. On the other hand, an undefined property gets a NULL value instead. 

The coalesce ??, isset() and empty() operators may be used to check if the property exists, even when it is not defined. Be careful to avoid confusing an undefined property and its empty equivalent.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/typed-static-property-%s::$%s-must-not-be-accessed-before-initialization.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/typed-static-property-%s::$%s-must-not-be-accessed-before-initialization.html","name":"Typed static property %s::$%s must not be accessed before initialization","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"Typed static properties are undefined until they are assigned for the first time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/typed-static-property-%s::$%s-must-not-be-accessed-before-initialization.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
	public static int $property;
}

echo x::$property;

?>
```

## Literal Examples
+ Typed static property x::$p must not be accessed before initialization

## Alternatives
+ Give a default value to the property.
+ Set the value of the property in the constructor.
+ Use isset(), empty() or ?? to check the status of the property before usage.

## Related error messages
+ [attempt-to-unset-static-property-%s::$%s](attempt-to-unset-static-property-%s::$%s.html)
+ [typed-property-%s::$%s-must-not-be-accessed-before-initialization](typed-property-%s::$%s-must-not-be-accessed-before-initialization.html)

## Related error messages
+ [Typedpropertymustnotbeaccessedbeforeinitialization](https://madewithlove.com/blog/typed-property-must-not-be-accessed-before-initialization/)
