# Use of \"static\" in callables is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/use-of--static--in-callables-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/use-of--static--in-callables-is-deprecated.html","name":"Use of \\\"static\\\" in callables is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-21T21:47:26+00:00","dateModified":"2026-09-21T21:47:26+00:00","description":"The relative class names ``self``, ``parent`` and ``static`` only have a meaning inside a class body, resolved against the scope currently active","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/use-of--static--in-callables-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The relative class names `self`, `parent` and `static` only have a meaning inside a class body, resolved against the scope currently active. Nothing stops a string or array callable from containing `static`, e.g. `'static::method'` or `['static', 'method']`, but such a callable has no fixed target: PHP resolves `static` using late static binding against whatever called scope happens to be active where the callable is finally *invoked* (through `call_user_func()`, `is_callable()`, etc.), which can be a completely different class than the one where the string was built.

As of PHP 8.2, resolving a callable that uses `static` this way emits `Use of "static" in callables is deprecated`. The callable still works for now -- and keeps resolving against the invocation-time called scope -- but this implicit, moving-target behaviour is expected to be removed in a future version.

## Example

```php
<?php

class Foo {
    public static function bar() {
        return 'Foo::bar called';
    }

    public static function make() {
        // The string is built here, inside Foo, but 'static' is NOT
        // resolved against Foo -- see where it is actually invoked below.
        return 'static::bar';
    }
}

class Base {
    public static function bar() {
        return 'Base::bar called';
    }

    public static function run($callable) {
        // 'static' resolves against the called scope active HERE
        // (Sub, since run() was invoked as Sub::run()), not against Foo.
        var_dump(call_user_func($callable));
    }
}

class Sub extends Base {
    public static function bar() {
        return 'Sub::bar called';
    }
}

$callable = Foo::make(); // the string 'static::bar'
Sub::run($callable); // prints 'Sub::bar called', not 'Foo::bar called'

?>
```

## Literal Examples
+ Use of "static" in callables is deprecated

## Alternatives
+ Replace 'static::method' with static::class . '::method' so the callable is no longer context-dependent.
+ For array callables, use [static::class, 'method'] instead of ['static', 'method'].
+ Use first-class callable syntax (PHP 8.1+), e.g. static::method(...), when the callable is created and used in the same place.

## Related error messages
+ [use-of--"self-"-in-callables-is-deprecated](use-of--self--in-callables-is-deprecated.html)
+ [use-of--"parent-"-in-callables-is-deprecated](use-of--parent--in-callables-is-deprecated.html)
+ [callables-of-the-form-[-"%s](callables-of-the-form-\[-%s.html)

## Related error messages
+ [PHP RFC: Deprecate partially supported callables](https://wiki.php.net/rfc/deprecate_partially_supported_callables)
+ [Callables manual](https://www.php.net/manual/en/language.types.callable.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()