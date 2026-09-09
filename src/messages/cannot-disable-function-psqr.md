# Cannot disable function %s()

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-disable-function-psqr.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-disable-function-psqr.html","name":"Cannot disable function %s()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-09T14:14:24+00:00","dateModified":"2026-09-09T14:14:24+00:00","description":"The ``disable_functions`` (and, for language constructs treated as functions internally, similarly-behaving) php","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-disable-function-psqr.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `disable_functions` (and, for language constructs treated as functions internally, similarly-behaving) php.ini directive lets an administrator remove selected functions from the language, for hardening purposes. A handful of language constructs, namely `exit`/`die` and `clone`, are implemented internally as pseudo-functions so that they can be listed in `disable_functions` too, but they cannot actually be removed: doing so would leave the engine without a way to terminate a script or clone an object, both of which are needed by the engine itself.

Listing one of these three names in `disable_functions` does not stop PHP from starting; it only emits this warning once, at startup, and the name stays callable.

## Example

```php
; php.ini

disable_functions = exit,die,clone
```

## Literal Examples
+ Cannot disable function exit()
+ Cannot disable function die()
+ Cannot disable function clone()

## Alternatives
+ Do not list exit, die or clone in disable_functions; they cannot be disabled.
+ To restrict script termination or cloning, use a different mechanism, such as static analysis, a coding standard, or a runtime policy (open_basedir, custom error/shutdown handlers) instead.

## Related error messages
+ [disable_functions](https://www.php.net/manual/en/ini.core.php#ini.disable-functions)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()