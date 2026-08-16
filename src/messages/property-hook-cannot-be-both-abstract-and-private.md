# Property hook cannot be both abstract and private

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/property-hook-cannot-be-both-abstract-and-private.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/property-hook-cannot-be-both-abstract-and-private.html","name":"Property hook cannot be both abstract and private","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"Property hook may be private, as in only available to current class, or abstract, as in always redefined in a child class, but not both at the same time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/property-hook-cannot-be-both-abstract-and-private.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Property hook may be private, as in only available to current class, or abstract, as in always redefined in a child class, but not both at the same time. 

It is the same as for methods.

## Example

```php
<?php

class X {
    private abstract $property { get; }
}

?>
```

## Alternatives
+ Make the method protected or public.
+ Remove the abstract keyword.
