# Cannot apply #[AllowDynamicProperties] to interface %s

## Description
The attribute `AllowDynamicProperties` has no meaning when used with a interface, even as interface can define properties. Apply it to any class that implements the interface.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-apply-#[allowdynamicproperties]-to-interface-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-apply-#[allowdynamicproperties]-to-interface-%s.html","name":"Cannot apply #[AllowDynamicProperties] to interface %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:12:03 +0000","dateModified":"Tue, 31 Mar 2026 09:12:03 +0000","description":"The attribute ``AllowDynamicProperties`` has no meaning when used with a interface, even as interface can define properties","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-apply-#[allowdynamicproperties]-to-interface-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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
