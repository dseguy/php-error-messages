# Cannot apply #[AllowDynamicProperties] to interface %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-apply-s[allowdynamicproperties]-to-interface-ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-apply-s[allowdynamicproperties]-to-interface-ps.html","name":"Cannot apply #[AllowDynamicProperties] to interface %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-03-15T10:08:31+01:00","dateModified":"2026-03-31T11:13:13+02:00","description":"The attribute ``AllowDynamicProperties`` has no meaning when used with a interface, even as interface can define properties","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-apply-s[allowdynamicproperties]-to-interface-ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The attribute `AllowDynamicProperties` has no meaning when used with a interface, even as interface can define properties. Apply it to any class that implements the interface.

## Example

```php
<?php

#[AllowDynamicProperties]
interface I {}

?>
```

## Literal Examples
+ Cannot apply ``#[AllowDynamicProperties]`` to interface i

## Alternatives
+ Use the attribute on the class that implements the interface.
