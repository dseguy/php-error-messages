# Use of \"self\" in callables is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/use-of--self--in-callables-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/use-of--self--in-callables-is-deprecated.html","name":"Use of \\\"self\\\" in callables is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-21T21:47:06+00:00","dateModified":"2026-09-21T21:47:06+00:00","description":"The relative class names ``self``, ``parent`` and ``static`` only have a meaning inside a class body, resolved against the scope currently active","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/use-of--self--in-callables-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The relative class names `self`, `parent` and `static` only have a meaning inside a class body, resolved against the scope currently active. Nothing stops a string or array callable from containing one of them, e.g. `'self::method'` or `['self', 'method']`, but such a callable has no fixed target: PHP resolves `self` against whatever class scope happens to be active where the callable is finally *invoked* (through `call_user_func()`, `is_callable()`, etc.), which can be a completely different class than the one where the string was built.

As of PHP 8.2, resolving a callable that uses `self` this way emits `Use of "self" in callables is deprecated`. The callable still works for now -- and keeps resolving against the invocation-time scope -- but this implicit, moving-target behaviour is expected to be removed in a future version.

## Example

```php
<?php

class Foo {
    public static function bar() {
        return 'Foo::bar called';
    }

    public static function make() {
        // The string is built here, inside Foo, but 'self' is NOT
        // resolved against Foo -- see where it is actually invoked below.
        return 'self::bar';
    }
}

class Other {
    public static function bar() {
        return 'Other::bar called';
    }

    public function run($callable) {
        // 'self' resolves against THIS scope (Other), the one active
        // where the callable is invoked, not where the string was built.
        var_dump(call_user_func($callable));
    }
}

$callable = Foo::make(); // the string 'self::bar'
(new Other)->run($callable); // prints 'Other::bar called', not 'Foo::bar called'

?>
```

## Literal Examples
+ Use of "self" in callables is deprecated

## Alternatives
+ Replace 'self::method' with self::class . '::method' (or the target class's own name) so the callable is no longer context-dependent.
+ For array callables, use [self::class, 'method'] instead of ['self', 'method'].
+ Use first-class callable syntax (PHP 8.1+), e.g. self::method(...), when the callable is created and used in the same place.

## Related error messages
+ [use-of--"parent-"-in-callables-is-deprecated](use-of--parent--in-callables-is-deprecated.html)
+ [use-of--"static-"-in-callables-is-deprecated](use-of--static--in-callables-is-deprecated.html)
+ [callables-of-the-form-[-"%s](callables-of-the-form-\[-%s.html)

## Related error messages
+ [PHP RFC: Deprecate partially supported callables](https://wiki.php.net/rfc/deprecate_partially_supported_callables)
+ [Callables manual](https://www.php.net/manual/en/language.types.callable.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()