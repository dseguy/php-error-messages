# The magic method %s::%s() must have public visibility

## Description
The magic methods must have the `public` visibility, as their features are available to external sources. It may also use the default visibility.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-magic-method-%s::%s()-must-have-public-visibility.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-magic-method-%s::%s()-must-have-public-visibility.html","name":"The magic method %s::%s() must have public visibility","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"The magic methods must have the ``public`` visibility, as their features are available to external sources","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-magic-method-%s::%s()-must-have-public-visibility.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
    private function __isset($x) {}
    protected function __get($x) {}
}

?>
```

## Literal Examples
+ The magic method X::__isset() must have public visibility
+ The magic method X::__get() must have public visibility
+ The magic method X::__set() must have public visibility

## Alternatives
+ Set the visibility to ``public``.
+ Remove the visibility, to use the default of ``public``.
+ Remove  the magic method.
