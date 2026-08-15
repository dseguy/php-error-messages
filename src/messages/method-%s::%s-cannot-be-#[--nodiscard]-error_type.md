# Method %s::%s cannot be #[\\NoDiscard] error_type

## Description
The `#[\NoDiscard]` attribute marks a function, method or closure so that the engine emits a warning whenever a caller ignores its return value. A number of magic methods -- `__clone`, `__set`, `__unset`, `__wakeup` and `__unserialize` -- are expected to always behave as if declared `: void`: PHP calls them purely for their side effect and never looks at, or exposes, any value they might return. Marking one of them `#[\NoDiscard]` is therefore meaningless, and PHP rejects it at compile time.

This is the same wording as the message used for `__construct` and `__destruct` (see method-%s::%s-cannot-be-#[--nodiscard]), but produced by a different internal check: those two magic methods are not even allowed to declare a return type at all, whereas the methods covered here are simply always treated as implicitly `void`. The trailing 'error_type' in this file's identifier is an artifact of how this catalog extracts messages from the PHP source; it is not part of the text PHP actually displays.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/method-%s::%s-cannot-be-#[--nodiscard]-error_type.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/method-%s::%s-cannot-be-#[--nodiscard]-error_type.html","name":"Method %s::%s cannot be #[\\\\NoDiscard] error_type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 17 Jul 2026 20:56:21 +0000","dateModified":"Fri, 17 Jul 2026 20:56:21 +0000","description":"The ``#[\\NoDiscard]`` attribute marks a function, method or closure so that the engine emits a warning whenever a caller ignores its return value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/method-%s::%s-cannot-be-#[--nodiscard]-error_type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
    #[\NoDiscard]
    public function __clone() {}
}

$x = new X();
clone $x;

?>
```

## Literal Examples
+ Method X::__clone cannot be #[\NoDiscard]
+ Method X::__set cannot be #[\NoDiscard]
+ Method X::__unset cannot be #[\NoDiscard]
+ Method X::__wakeup cannot be #[\NoDiscard]
+ Method X::__unserialize cannot be #[\NoDiscard]

## Alternatives
+ Remove the ``#[\NoDiscard]`` attribute from the magic method.
+ If a discardable-value warning is needed, move the logic to a regular, non-magic method and mark that one instead.

## Related error messages
+ [method-%s::%s-cannot-be-#[--nodiscard]](asdf)
+ [a-void-%s-does-not-return-a-value](asdf)
+ [a-never-returning-%s-does-not-return-a-value](asdf)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()