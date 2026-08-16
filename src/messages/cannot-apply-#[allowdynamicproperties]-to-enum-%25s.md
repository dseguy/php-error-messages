# Cannot apply #[AllowDynamicProperties] to enum %s

## Description
The attribute `AllowDynamicProperties` has no meaning when used with an enumeration, even as enums can define properties.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-apply-#[allowdynamicproperties]-to-enum-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-apply-#[allowdynamicproperties]-to-enum-%s.html","name":"Cannot apply #[AllowDynamicProperties] to enum %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The attribute ``AllowDynamicProperties`` has no meaning when used with an enumeration, even as enums can define properties","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-apply-#[allowdynamicproperties]-to-enum-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

#[AllowDynamicProperties]
enum E {}

?>
```

## Literal Examples
+ Cannot apply #[AllowDynamicProperties] to enum e

## Alternatives
+ Do not use the attribute on an enumeration.
