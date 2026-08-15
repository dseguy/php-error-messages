# Attribute class "%s" not found

## Description
This error reports that a class was not found. This is also focusing on attribute classes. 

Class are reported as not found when they are used, so this error message is displayed when the attribute is actually used in the code, by calling the `getInstance` reflection. An attribute might exists without its underlying class, as long as it is not instanciated.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/attribute-class-\"%s\"-not-found.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/attribute-class-\"%s\"-not-found.html","name":"Attribute class \"%s\" not found","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"This error reports that a class was not found","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/attribute-class-\"%s\"-not-found.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

#[X] 
function f() { }

$ref = new \ReflectionFunction('\f');

try {
    $ref->getAttributes()[0]->newInstance();
} catch (\Error $e) {
    var_dump($e->getMessage());
}
?>
```

## Literal Examples
+ Attribute class "Deprecated" not found

## Alternatives
+ Check spelling and namespace for that class.
+ Create the associated class.
+ Avoid using getInstance() on that attribute.

## Related error messages
+ [class-"%s"-not-found](asdf)
+ [interface-"%s"-not-found](asdf)
