# Module "%s" is already loaded

## Description
The current configuration of the PHP engine include twice the same extension. The first extension is loaded and the last extension is omitted. The features are available, and the log will be filled with the warning.

PHP uses several distinct files to list the extensions to load, such as `php.ini`, `cond.d/*.ini`, and the SAPI configuration files, including the web server, CLI's `php.ini`, etc.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/module-\"%s\"-is-already-loaded.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/module-\"%s\"-is-already-loaded.html","name":"Module \"%s\" is already loaded","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The current configuration of the PHP engine include twice the same extension","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/module-\"%s\"-is-already-loaded.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php

```

## Literal Examples
+ Module "imagick" is already loaded

## Alternatives
+ Find the duplicate extension configuration and remove all of the, but one.

## Related error messages
+ [✅ (Solved) How to Fix PHP Warning: Module ‘imagick’ already loaded Error](https://blog.radwebhosting.com/how-to-fix-php-warning-module-imagick-already-loaded/)
