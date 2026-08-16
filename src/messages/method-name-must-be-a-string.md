# Method name must be a string

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/method-name-must-be-a-string.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/method-name-must-be-a-string.html","name":"Method name must be a string","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-01-17T12:32:50+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"When using a dynamic syntax to call a method, the name of the method must be a string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/method-name-must-be-a-string.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
When using a dynamic syntax to call a method, the name of the method must be a string. It cannot be any other type, as no type juggling will take place. In particular, objects with `toString` are not converted to their string value.

Although method names have a specific format, this is not checked here, and the string is used raw.

Note that there is not equivalent for dynamic property names: they are cast to string as needed.

## Example

```php
<?php

class X {
    static function foo() {}
}

$b = 1;
X::$b();

?>
```

## Alternatives
+ Cast the variable to string first, with ``(string)``.
+ Check if the variable is a string before using it.
+ Use a switch to hardcode the method name.
