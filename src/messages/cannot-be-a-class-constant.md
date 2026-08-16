# cannot be a class constant

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-be-a-class-constant.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-be-a-class-constant.html","name":"cannot be a class constant","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"Class constants must be defined in classes, enums, traits or interfaces","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-be-a-class-constant.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Class constants must be defined in classes, enums, traits or interfaces. They cannot be created dynamically, nor with the define() function.

## Example

```php
<?php
define('foo::bar', 1);
define('::', 1);
?>
```

## Alternatives
+ Define the class constant in a class.
+ Define the class constant in a trait.
+ Define the class constant in a interface.
+ Define the class constant in a enum.
+ Define the global constant, and use it as a value for the class constant.
