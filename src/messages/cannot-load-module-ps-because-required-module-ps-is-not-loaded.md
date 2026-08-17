# Cannot load module "%s" because required module "%s" is not loaded

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-load-module-ps-because-required-module-ps-is-not-loaded.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-load-module-ps-because-required-module-ps-is-not-loaded.html","name":"Cannot load module \"%s\" because required module \"%s\" is not loaded","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:46+00:00","dateModified":"2026-03-31T09:10:46+00:00","description":"This is an error in the structure of the compiled PHP parser","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-load-module-ps-because-required-module-ps-is-not-loaded.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This is an error in the structure of the compiled PHP parser. PHP relies on extensions to provide features : xml, sql, http, etc. Sometimes, those extensions are build on top of other extensions: for example, the redis extension requires the json extension. 

The names of the modules are displayed in the error messsage: check the installation procedure, as there might be missing extensions or libraries. 

Here, modules is another name for a PHP extension.

## Example

```php
<?php

// well, the problem might also happen even before
// trying to execute that code

$redis = new Redis();

?>
```

## Literal Examples
+ Cannot load module "redis" because required module "redis" is not loaded

## Alternatives
+ Check the module list of PHP, and finish the installation of the missing extension.
+ Remove the first module, which will remove the dependency on the second, and, its related features.
