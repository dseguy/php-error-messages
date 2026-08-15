# Cannot apply #[AllowDynamicProperties] to trait %s

## Description
The attribute `AllowDynamicProperties` has no meaning when used with a trait, even as traits can defined properties. Apply it to any class that uses the trait.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-apply-#[allowdynamicproperties]-to-trait-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-apply-#[allowdynamicproperties]-to-trait-%s.html","name":"Cannot apply #[AllowDynamicProperties] to trait %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The attribute ``AllowDynamicProperties`` has no meaning when used with a trait, even as traits can defined properties","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-apply-#[allowdynamicproperties]-to-trait-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

#[AllowDynamicProperties]
trait T {}

?>
```

## Literal Examples
+ Cannot apply #[AllowDynamicProperties] to trait t

## Alternatives
+ Use the attribute on the class that use the trait.
