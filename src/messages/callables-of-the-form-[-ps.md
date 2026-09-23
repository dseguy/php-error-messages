# Callables of the form [\"%s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/callables-of-the-form-[-ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/callables-of-the-form-[-ps.html","name":"Callables of the form [\\\"%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-21T21:45:29+00:00","dateModified":"2026-09-21T21:45:29+00:00","description":"PHP's callable array syntax is documented as ``[$objectOrClass, 'methodName']``: the first element gives the object or class, the second is a plain method name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/callables-of-the-form-[-ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP's callable array syntax is documented as `[$objectOrClass, 'methodName']`: the first element gives the object or class, the second is a plain method name. The engine, however, has always also accepted a second element that is itself a compound `'Class::method'` string, silently ignoring or double-checking the class given by the first element. This form only ever worked through `call_user_func()`, `is_callable()` and similar reflective APIs -- it was never invocable through the direct `$callable()` syntax -- so it belongs to the family of 'partially supported callables'.

As of PHP 8.2, resolving such an array emits `Callables of the form ["%s", "%s"] are deprecated`, with the two placeholders filled with the class name resolved from the first element and the full compound string from the second. Plain callables such as `'Class::method'` or `[$objectOrClass, 'method']` are not affected.

## Example

```php
<?php

class Foo {
    public static function bar() {
        return 'bar called';
    }
}

// The first element already resolves 'Foo', and the second element
// repeats it inside a compound 'Class::method' string.
$callable = ['Foo', 'Foo::bar'];

var_dump(call_user_func($callable));

?>
```

## Literal Examples
+ Callables of the form ["Foo", "Foo::bar"] are deprecated

## Alternatives
+ Drop the redundant class prefix from the second element and use the plain method name: [$objectOrClass, 'method'].
+ If a fully qualified callable is preferred, use the string form 'Class::method' directly instead of an array.
+ Use first-class callable syntax (PHP 8.1+), e.g. Foo::bar(...), when the target is known at the call site.

## Related error messages
+ [use-of--"self-"-in-callables-is-deprecated](use-of--self--in-callables-is-deprecated.html)
+ [use-of--"parent-"-in-callables-is-deprecated](use-of--parent--in-callables-is-deprecated.html)
+ [use-of--"static-"-in-callables-is-deprecated](use-of--static--in-callables-is-deprecated.html)

## Related error messages
+ [PHP RFC: Deprecate partially supported callables](https://wiki.php.net/rfc/deprecate_partially_supported_callables)
+ [Callables manual](https://www.php.net/manual/en/language.types.callable.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()