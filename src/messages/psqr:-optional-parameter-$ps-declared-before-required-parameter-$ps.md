# %s(): Optional parameter $%s declared before required parameter $%s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/psqr:-optional-parameter-$ps-declared-before-required-parameter-$ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/psqr:-optional-parameter-$ps-declared-before-required-parameter-$ps.html","name":"%s(): Optional parameter $%s declared before required parameter $%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-24T07:03:00+00:00","dateModified":"2026-09-24T07:03:00+00:00","description":"A parameter with a default value is only truly optional when every parameter that follows it also has one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/psqr:-optional-parameter-$ps-declared-before-required-parameter-$ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A parameter with a default value is only truly optional when every parameter that follows it also has one. PHP has always allowed writing an optional parameter before a required one, but silently converted the earlier one into a required parameter as soon as it was actually called -- its default value was never reachable. This has been deprecated since PHP 8.0, and, since PHP 8.1, is no longer just a notice: such a parameter is always treated as required -- even when called with named arguments -- so omitting it raises an `ArgumentCountError` instead of falling back to the default.

This particular wording, naming the function, is the current one: PHP 8.4 reworded a batch of parameter- and return-value-related deprecations to prefix the message with `FunctionName(): `, matching the style already used for most other deprecations.

## Example

```php
<?php

// $a looks optional (it has a default), but $b after it has none,
// so $a can no longer really be left out.
function foo($a = 1, $b) {
    return $a + $b;
}

var_dump(foo(2, 3));

?>
```

## Literal Examples
+ foo(): Optional parameter $a declared before required parameter $b is implicitly treated as a required parameter

## Alternatives
+ Give the earlier parameter's default to every parameter that needs one, and move genuinely required parameters first.
+ If the default is only there for backward compatibility, make the parameter nullable (?Type $a = null) and document that null is not a meaningful value on its own.
+ Use named arguments at the call site instead of relying on positional defaults.

## Related error messages
+ [PHP.Watch: Deprecate required param after optional](https://php.watch/versions/8.0/deprecate-required-param-after-optional)
+ [Function arguments manual](https://www.php.net/manual/en/functions.arguments.php)

In previous PHP versions, this error message used to be :ref:`optional-parameter-$%s-declared-before-required-parameter-$%s-is-implicitly-treated-as-a-required-parameter`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[Prior to PHP 8.4, the same deprecation was worded "Optional parameter $a declared before required parameter $b is implicitly treated as a required parameter", without the leading "FunctionName(): " prefix. Before PHP 8.1, PHP 8.0 used a different wording still: "Required parameter $b follows optional parameter $a".](Prior to PHP 8.4, the same deprecation was worded "Optional parameter $a declared before required parameter $b is implicitly treated as a required parameter", without the leading "FunctionName(): " prefix. Before PHP 8.1, PHP 8.0 used a different wording still: "Required parameter $b follows optional parameter $a".)