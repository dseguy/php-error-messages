# Interface "%s" not found

## Description
This error message is reported when the interface could not be loaded, or when the name of the class is invalid.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/interface-\"%s\"-not-found.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/interface-\"%s\"-not-found.html","name":"Interface \"%s\" not found","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"This error message is reported when the interface could not be loaded, or when the name of the class is invalid","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/interface-\"%s\"-not-found.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

// '4f' is not a valid name for an interface
('4f')::c;

// it is not possible to name a class 'interface'
('interface')::c;

?>
```

## Literal Examples
+ Interface "4f" not found
+ Interface "interface" not found

## Alternatives
+ Check spelling and namespace for that interface.
+ Create the required interface.
+ Check if the interface is defined in an extension, and the extension is included in the current PHP engine.
+ Check if the interface is defined in a dependency, and the dependency is included in the current composer.json.
+ Do not use static, parent or self in a string to call a method statically.

## Related error messages
+ [attribute-class-"%s"-not-found](attribute-class-%s-not-found.html)
+ [illegal-class-name](illegal-class-name.html)
+ [%s-cannot-implement-%s---it-is-not-an-interface](%s-cannot-implement-%s---it-is-not-an-interface.html)

In previous PHP versions, this error message used to be :ref:`interface-%s-cannot-implement-itself`.