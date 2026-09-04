# Cannot call %pS() dynamically

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-call-ppsqr-dynamically.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-call-ppsqr-dynamically.html","name":"Cannot call %pS() dynamically","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-04T15:20:19+00:00","dateModified":"2026-09-04T15:20:19+00:00","description":"A handful of built-in functions, such as ``compact()``, ``extract()``, ``func_get_args()``, ``func_get_arg()`` and ``func_num_args()``, work by inspecting the calling scope directly","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-call-ppsqr-dynamically.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A handful of built-in functions, such as `compact()`, `extract()`, `func_get_args()`, `func_get_arg()` and `func_num_args()`, work by inspecting the calling scope directly. Because of that, they can only be called by writing their name literally in the source code; they cannot be called dynamically, for example through a variable holding the function name, `call_user_func()`, or the first-class callable syntax. This restriction predates PHP 8.6: the `Closure` produced by `$fn(...)` above is created successfully, but throws this `Error` the moment it is actually invoked.

PHP 8.6 introduces Partial Function Application (the `?` and `...` placeholders), which is built on the same compiler as first-class callable syntax. Using a placeholder call such as `compact(?, ?)` on one of these scope-dependent functions hits the same restriction, but does so immediately, while the partial-application expression itself is being compiled, rather than only when the resulting closure is later called.

## Example

```php
<?php

$fn = 'compact';

// First-class callable syntax applied to a variable function name
$partial = $fn(...);
$partial('a', 'b');

?>
```

## Literal Examples
+ Cannot call compact() dynamically
+ Cannot call extract() dynamically
+ Cannot call func_get_args() dynamically

## Alternatives
+ Call the function by writing its literal name in the source, instead of through a variable, callback, or Partial Function Application.
+ For compact()/extract(), pass the variables or array explicitly instead of relying on the calling scope.

## Related error messages
+ [cannot-call-constructor](cannot-call-constructor.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[The restriction and its message text are unchanged. PHP 8.6 only changes when it is reported for these functions when used with Partial Function Application placeholders: the error now surfaces while compiling the partial-application expression, instead of only when the resulting Closure is later called.](The restriction and its message text are unchanged. PHP 8.6 only changes when it is reported for these functions when used with Partial Function Application placeholders: the error now surfaces while compiling the partial-application expression, instead of only when the resulting Closure is later called.)