# Call to %s %s::__destruct() from global scope during shutdown ignored

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/call-to-%s-%s::__destruct()-from-global-scope-during-shutdown-ignored.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/call-to-%s-%s::__destruct()-from-global-scope-during-shutdown-ignored.html","name":"Call to %s %s::__destruct() from global scope during shutdown ignored","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-07-13T20:51:12+02:00","dateModified":"2026-07-13T20:51:12+02:00","description":"During PHP shutdown, destructors are called for remaining objects","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/call-to-%s-%s::__destruct()-from-global-scope-during-shutdown-ignored.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
During PHP shutdown, destructors are called for remaining objects. When a `__destruct()` method is invoked from global scope (i.e. not as part of object destruction triggered by the garbage collector or script end), PHP emits this warning and ignores the call.

This typically happens when a `register_shutdown_function()` callback creates an object whose destructor is called during the final cleanup phase. The object is destroyed immediately, but the invocation from global scope is considered invalid.

The warning ensures that destructors are only called in their expected context: as part of object lifetime management, not from arbitrary global code.

## Example

```php
<?php

class X {
    public function __destruct() {
        echo "Destroying\n";
    }
}

register_shutdown_function(function() {
    $x = new X;
});

?>
```

## Literal Examples
+ Call to public X::__destruct() from global scope during shutdown ignored
+ Call to protected X::__destruct() from global scope during shutdown ignored

## Alternatives
+ Move the logic from ``__destruct()`` into a regular method and call it explicitly before the object is destroyed.
+ Avoid creating objects inside shutdown functions if you rely on their destructor behavior.
+ Use a dedicated lifecycle method instead of relying on ``__destruct()`` for cleanup logic.

## Related error messages
+ [__destruct](https://www.php.net/manual/en/language.oop5.decon.php)
+ [register_shutdown_function](https://www.php.net/manual/en/function.register-shutdown-function.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()