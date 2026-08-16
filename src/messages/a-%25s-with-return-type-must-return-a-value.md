# A %s with return type must return a value

## Description
When a function or a method declares a return type, every `return` statement in its body must provide a value, unless the type accepts no returned value (`void`, `never`) or the type allows `null`.

Writing a bare `return;`, without an expression, is only valid when the declared return type permits the absence of a value. Here, `int` does not, so the engine cannot supply an implicit value.

This is a compile time check: it does not depend on the code being executed.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/a-%s-with-return-type-must-return-a-value.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/a-%s-with-return-type-must-return-a-value.html","name":"A %s with return type must return a value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 11:30:35 +0000","dateModified":"Wed, 05 Aug 2026 11:30:35 +0000","description":"When a function or a method declares a return type, every ``return`` statement in its body must provide a value, unless the type accepts no returned value (``void``, ``never``) or the type allows ``null``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/a-%s-with-return-type-must-return-a-value.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

function foo(): int {
    return;
}

?>
```

## Alternatives
+ Add a value to the return statement, matching the declared return type.
+ Remove the return type, if the function is not meant to return a value.
+ Change the return type to ``void`` if the function is not meant to return a value.

## Related error messages
+ [a-void-%s-must-not-return-a-value](a-void-%s-must-not-return-a-value.html)
+ [a-void-%s-does-not-return-a-value](a-void-%s-does-not-return-a-value.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()