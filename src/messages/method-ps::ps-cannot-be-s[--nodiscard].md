# Method %s::%s cannot be #[\\NoDiscard]

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/method-ps::ps-cannot-be-s[--nodiscard].html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/method-ps::ps-cannot-be-s[--nodiscard].html","name":"Method %s::%s cannot be #[\\\\NoDiscard]","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-07-17T22:59:23+02:00","dateModified":"2026-07-24T19:28:38+02:00","description":"The ``#[\\NoDiscard]`` attribute marks a function, method or closure so that the engine emits a warning whenever a caller ignores its return value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/method-ps::ps-cannot-be-s[--nodiscard].html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `#[\NoDiscard]` attribute marks a function, method or closure so that the engine emits a warning whenever a caller ignores its return value. Certain magic methods, such as `__construct`, `__destruct`, `__clone` and `__wakeup`, are always invoked for their side effect and never return a usable value to the caller (`new` returns the object itself, not the constructor's return value), so attaching `#[\NoDiscard]` to them is meaningless and rejected at compile time.

## Example

```php
<?php

class X {
    #[\NoDiscard]
    public function __construct() {}
}

new X();

?>
```

## Literal Examples
+ Method X::__construct cannot be #[\NoDiscard]

## Alternatives
+ Remove the ``#[\NoDiscard]`` attribute from the magic method.
+ If a discardable-value warning is needed, move the logic to a regular, non-magic method and mark that one instead.

## Related error messages
+ [a-void-%s-does-not-return-a-value](a-void-%s-does-not-return-a-value.html)
+ [a-never-returning-%s-does-not-return-a-value](a-never-returning-%s-does-not-return-a-value.html)
+ [method-%s::%s-cannot-be-#[--nodiscard]-error_type](method-%s::%s-cannot-be-#\[--nodiscard\]-error\_type.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()