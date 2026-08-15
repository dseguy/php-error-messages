# Cannot use \"parent\" when no class scope is active

## Description
`parent::` can only be used inside a class, trait, or enum, referring to the parent of the class in scope. It cannot be used in a plain function, nor at the top level of a script, where there is no class scope at all.

This differs from using `parent::` inside a class that has no parent: that case is a distinct, related error.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use--\"parent-\"-when-no-class-scope-is-active.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use--\"parent-\"-when-no-class-scope-is-active.html","name":"Cannot use \\\"parent\\\" when no class scope is active","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 11:31:34 +0000","dateModified":"Wed, 05 Aug 2026 11:31:34 +0000","description":"``parent::`` can only be used inside a class, trait, or enum, referring to the parent of the class in scope","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use--\"parent-\"-when-no-class-scope-is-active.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

function foo() {
    parent::bar();
}

?>
```

## Alternatives
+ Move the code inside a class that extends another class.
+ Call the target method directly, on an instance or via its class name.

## Related error messages
+ [cannot-use--"parent-"-when-current-class-scope-has-no-parent](cannot-use--parent--when-current-class-scope-has-no-parent.html)
+ [cannot-use--"%s-"-when-no-class-scope-is-active](cannot-use--%s--when-no-class-scope-is-active.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()