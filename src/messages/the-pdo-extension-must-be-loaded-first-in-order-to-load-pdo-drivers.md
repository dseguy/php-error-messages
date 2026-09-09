# The PDO extension must be loaded first in order to load PDO drivers

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-pdo-extension-must-be-loaded-first-in-order-to-load-pdo-drivers.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-pdo-extension-must-be-loaded-first-in-order-to-load-pdo-drivers.html","name":"The PDO extension must be loaded first in order to load PDO drivers","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-09T14:15:21+00:00","dateModified":"2026-09-09T14:15:21+00:00","description":"Driver extensions such as ``pdo_mysql``, ``pdo_sqlite`` or ``pdo_pgsql`` are separate shared extensions from the core ``pdo`` extension: at startup, each of them registers itself with the core PDO extension so that it can be looked up later by ``PDO::getAvailableDrivers()`` and by the ``new PDO(\"driver:","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-pdo-extension-must-be-loaded-first-in-order-to-load-pdo-drivers.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Driver extensions such as `pdo_mysql`, `pdo_sqlite` or `pdo_pgsql` are separate shared extensions from the core `pdo` extension: at startup, each of them registers itself with the core PDO extension so that it can be looked up later by `PDO::getAvailableDrivers()` and by the `new PDO("driver:...")` DSN syntax.

That registration only works if the core `pdo` extension has already finished loading and initializing by the time the driver extension's own module init runs. If `pdo` was never loaded at all, for instance because it was built as a shared extension and its `extension=pdo` line is missing, commented out, or ordered after the driver in php.ini on a setup old enough not to resolve this automatically, PHP fails to start with this fatal error the moment it tries to register the driver.

## Example

```php
; php.ini, with the pdo shared extension missing or disabled,
; while a PDO driver extension is still enabled

;extension=pdo
extension=pdo_sqlite
```

## Literal Examples
+ The PDO extension must be loaded first in order to load PDO drivers

## Alternatives
+ Make sure extension=pdo (or a statically-built pdo) is enabled; most current PHP builds compile pdo statically or resolve module dependencies automatically, so this is mostly seen on custom or older builds.
+ If php.ini lists extensions manually, make sure pdo is loaded before any pdo_* driver extension.

## Related error messages
+ [PDO::getAvailableDrivers()](https://www.php.net/manual/en/pdo.getavailabledrivers.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()