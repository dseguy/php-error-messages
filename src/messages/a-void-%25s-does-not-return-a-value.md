# A void %s does not return a value, but #[\\NoDiscard] requires a return value

## Description
The `#[\NoDiscard]` attribute marks a function, method or closure so that the engine emits a warning whenever a caller ignores its return value. A `void`-returning function never produces a value to begin with, so requiring the caller to use one is a contradiction, and PHP rejects the combination at compile time.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/a-void-%s-does-not-return-a-value.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/a-void-%s-does-not-return-a-value.html","name":"A void %s does not return a value, but #[\\\\NoDiscard] requires a return value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:00:09 +0000","dateModified":"Wed, 05 Aug 2026 14:00:09 +0000","description":"The ``#[\\NoDiscard]`` attribute marks a function, method or closure so that the engine emits a warning whenever a caller ignores its return value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/a-void-%s-does-not-return-a-value.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

#[\NoDiscard]
function foo(): void {}

?>
```

## Literal Examples
+ A void function does not return a value, but #[\NoDiscard] requires a return value
+ A void method does not return a value, but #[\NoDiscard] requires a return value

## Alternatives
+ Remove the ``void`` return type, and actually return a meaningful value.
+ Remove the ``#[\NoDiscard]`` attribute, since there is nothing to discard.

## Related error messages
+ [a-void-%s-must-not-return-a-value](a-void-%s-must-not-return-a-value.html)
+ [a-never-returning-%s-does-not-return-a-value](a-never-returning-%s-does-not-return-a-value.html)
+ [method-%s::%s-cannot-be-#[--nodiscard]](method-%s::%s-cannot-be-#\[--nodiscard\].html)
+ [method-%s::%s-cannot-be-#[--nodiscard]-error_type](method-%s::%s-cannot-be-#\[--nodiscard\]-error\_type.html)
+ [a-%s-with-return-type-must-return-a-value](a-%s-with-return-type-must-return-a-value.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()