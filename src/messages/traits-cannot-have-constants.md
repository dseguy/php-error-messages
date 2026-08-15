# Traits cannot have constants

## Description
Constants int traits were added in PHP 8.2. Until then, they were not allowed: at compile time this error was yield.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/traits-cannot-have-constants.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/traits-cannot-have-constants.html","name":"Traits cannot have constants","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"Constants int traits were added in PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/traits-cannot-have-constants.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

trait T {
    const X = 1;
}

echo T::X;

?>
```

## Alternatives
+ Put the constant in the host class.
+ Put the constant in an interface.
+ Do not use the constant.
+ Move to PHP 8.2 or later.

## Related error messages
+ [cannot-access-trait-constant-%s::%s-directly](asdf)

In more recent PHP versions, this error message is now :ref:`cannot-access-trait-constant-%s::%s-directly`.