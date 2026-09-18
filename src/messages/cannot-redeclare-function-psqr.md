# Cannot redeclare function %s()

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redeclare-function-psqr.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redeclare-function-psqr.html","name":"Cannot redeclare function %s()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-09T18:11:49+02:00","dateModified":"2026-09-09T18:11:49+02:00","description":"This variant of the function redeclaration error is raised by OPcache, when it merges a script's freshly compiled functions into its shared-memory function table and finds a name collision with a function that is already cached, but for which OPcache has no usable source location (for example, a function generated at runtime, or one whose original op_array metadata is otherwise unavailable)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redeclare-function-psqr.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This variant of the function redeclaration error is raised by OPcache, when it merges a script's freshly compiled functions into its shared-memory function table and finds a name collision with a function that is already cached, but for which OPcache has no usable source location (for example, a function generated at runtime, or one whose original op_array metadata is otherwise unavailable). Because there is nothing meaningful to point at, the message omits the `(previously declared in ...)` part that the ordinary redeclaration error includes.

Functionally, this is the same constraint as the plain function redeclaration error: two functions cannot share the same name (case-insensitively) within the same namespace.

## Example

```php
<?php
// requires the Zend OPcache extension to be enabled

function foo() {}

?>
```

## Literal Examples
+ Cannot redeclare function foo()

## Alternatives
+ Change the name of one of the two functions.
+ Guard the declaration with function_exists() if the file may legitimately be included more than once.
+ Use include_once or require_once instead of include or require.

## Related error messages
+ [cannot-redeclare-function-%s()-(previously-declared-in-%s:%d)](cannot-redeclare-function-%s\(\)-\(previously-declared-in-%s:%d\).html)
+ [cannot-redeclare-%s()-(previously-declared-in-%s:%d)](cannot-redeclare-%s\(\)-\(previously-declared-in-%s:%d\).html)

In previous PHP versions, this error message used to be :ref:`cannot-redeclare-function-%s()-(previously-declared-in-%s:%d)`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()