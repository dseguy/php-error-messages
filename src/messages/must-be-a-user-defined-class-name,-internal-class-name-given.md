# must be a user-defined class name, internal class name given

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-user-defined-class-name,-internal-class-name-given.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-user-defined-class-name,-internal-class-name-given.html","name":"must be a user-defined class name, internal class name given","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-01-06T12:15:58+01:00","dateModified":"2025-09-18T06:57:58+02:00","description":"class_alias() creates an alias for a class, an enumeration, an interface or a trait","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-user-defined-class-name,-internal-class-name-given.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
class_alias() creates an alias for a class, an enumeration, an interface or a trait. Until PHP 8.3, it was only possible to create such aliases with custom structures, and it was not possible to do it with PHP native classes.

## Example

```php
<?php

class_alias(stdClass::class, MyClass::Class);

?>
```

## Alternatives
+ Upgrade to PHP 8.3 or more recent.
+ Create a class that extends the PHP native class, and create an alias on this custom class.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[classAliasWithInternalClass](classAliasWithInternalClass)