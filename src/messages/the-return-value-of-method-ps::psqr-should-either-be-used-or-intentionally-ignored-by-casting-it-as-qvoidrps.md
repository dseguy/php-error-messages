# The return value of method %s::%s() should either be used or intentionally ignored by casting it as (void)%S

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-return-value-of-method-%s::%s()-should-either-be-used-or-intentionally-ignored-by-casting-it-as-(void)%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-return-value-of-method-%s::%s()-should-either-be-used-or-intentionally-ignored-by-casting-it-as-(void)%s.html","name":"The return value of method %s::%s() should either be used or intentionally ignored by casting it as (void)%S","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-11-18T06:36:11+01:00","dateModified":"2026-03-31T11:06:56+02:00","description":"When a method has the ``NoDiscard`` attribute, it means that its returned value must be collected and used","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-return-value-of-method-%s::%s()-should-either-be-used-or-intentionally-ignored-by-casting-it-as-(void)%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
When a method has the `NoDiscard` attribute, it means that its returned value must be collected and used. When the value is simply ignored, PHP stops execution with a fatal error.

## Example

```php
<?php

#[\NoDiscard]
function foo() {
    return 1;
}

foo();

?>
```

## Alternatives
+ Store the returned value in a variable, and use it to check the returned value.
+ Use the function call as an argument of another method.
+ Use the ``(void)`` cast, to explicitly ignore the result.

## Related error messages
+ [the-return-value-of-function-%s()-should-either-be-used-or-intentionally-ignored-by-casting-it-as-(void)%s](the-return-value-of-function-%s\(\)-should-either-be-used-or-intentionally-ignored-by-casting-it-as-\(void\)%s.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()