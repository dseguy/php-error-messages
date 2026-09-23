# Use of \"parent\" in callables is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/use-of--parent--in-callables-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/use-of--parent--in-callables-is-deprecated.html","name":"Use of \\\"parent\\\" in callables is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-21T21:47:17+00:00","dateModified":"2026-09-21T21:47:17+00:00","description":"The relative class names ``self``, ``parent`` and ``static`` only have a meaning inside a class body, resolved against the scope currently active","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/use-of--parent--in-callables-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The relative class names `self`, `parent` and `static` only have a meaning inside a class body, resolved against the scope currently active. Nothing stops a string or array callable from containing `parent`, e.g. `'parent::method'` or `['parent', 'method']`, but such a callable has no fixed target: PHP resolves `parent` against the parent of whatever class scope happens to be active where the callable is finally *invoked* (through `call_user_func()`, `is_callable()`, etc.), which can be a completely different class hierarchy than the one where the string was built.

As of PHP 8.2, resolving a callable that uses `parent` this way emits `Use of "parent" in callables is deprecated`. The callable still works for now -- and keeps resolving against the invocation-time scope -- but this implicit, moving-target behaviour is expected to be removed in a future version.

## Example

```php
<?php

class Base {
    public static function bar() {
        return 'Base::bar called';
    }
}

class Foo extends Base {
    public static function make() {
        // The string is built here, inside Foo, but 'parent' is NOT
        // resolved against Foo's parent (Base) -- see where it is
        // actually invoked below.
        return 'parent::bar';
    }
}

class OtherBase {
    public static function bar() {
        return 'OtherBase::bar called';
    }
}

class Other extends OtherBase {
    public function run($callable) {
        // 'parent' resolves against THIS scope's parent (OtherBase),
        // not against Base, which is Foo's parent.
        var_dump(call_user_func($callable));
    }
}

$callable = Foo::make(); // the string 'parent::bar'
(new Other)->run($callable); // prints 'OtherBase::bar called', not 'Base::bar called'

?>
```

## Literal Examples
+ Use of "parent" in callables is deprecated

## Alternatives
+ Replace 'parent::method' with parent::class . '::method' so the callable is no longer context-dependent.
+ For array callables, use [parent::class, 'method'] instead of ['parent', 'method'].
+ Use first-class callable syntax (PHP 8.1+), e.g. parent::method(...), when the callable is created and used in the same place.

## Related error messages
+ [use-of--"self-"-in-callables-is-deprecated](use-of--self--in-callables-is-deprecated.html)
+ [use-of--"static-"-in-callables-is-deprecated](use-of--static--in-callables-is-deprecated.html)
+ [callables-of-the-form-[-"%s](callables-of-the-form-\[-%s.html)

## Related error messages
+ [PHP RFC: Deprecate partially supported callables](https://wiki.php.net/rfc/deprecate_partially_supported_callables)
+ [Callables manual](https://www.php.net/manual/en/language.types.callable.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()