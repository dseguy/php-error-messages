# Cannot use %s as %s because %s is a special class name

## Description
Some words, such as `float`, `never`, `_`, ... are reserved by PHP and cannot be used as an alias name, just like they are not allowed with class names.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-%s-as-%s-because-%s-is-a-special-class-name.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-%s-as-%s-because-%s-is-a-special-class-name.html","name":"Cannot use %s as %s because %s is a special class name","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"Some words, such as ``float``, ``never``, ``_``, ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-%s-as-%s-because-%s-is-a-special-class-name.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

use X as string;

?>
```

## Literal Examples
+ Cannot use X as string because string is a special class name

## Alternatives
+ Use another name.
