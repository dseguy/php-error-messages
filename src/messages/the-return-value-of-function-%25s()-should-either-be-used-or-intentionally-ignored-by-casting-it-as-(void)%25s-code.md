# The return value of function %s() should either be used or intentionally ignored by casting it as (void)%S code

## Description
.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-return-value-of-function-%s()-should-either-be-used-or-intentionally-ignored-by-casting-it-as-(void)%s-code.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-return-value-of-function-%s()-should-either-be-used-or-intentionally-ignored-by-casting-it-as-(void)%s-code.html","name":"The return value of function %s() should either be used or intentionally ignored by casting it as (void)%S code","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-return-value-of-function-%s()-should-either-be-used-or-intentionally-ignored-by-casting-it-as-(void)%s-code.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

#[NoDiscard]
function foo() {
    return 1;
}

foo();

?>
```

## Literal Examples
+ The return value of function foo() should either be used or intentionally ignored by casting it as (void)

## Alternatives
+ Add the ``(void)`` cast to the function call, so as to ignore the returned value.
+ Store the result of the function call in a variable and use it.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()