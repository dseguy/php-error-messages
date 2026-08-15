# Cannot use \"%s\" when no class scope is active

## Description
`self` and `static` refer to the class in which the code is written, respectively as a fixed reference and one resolved at call time (late static binding). Both require an active class scope: they can only be used inside a class, trait, or enum, not in a plain function nor at the top level of a script.

This error appears when `self` or `static` is used as a class reference, for instance to instantiate an object, call a static method, or fetch a class constant, outside of any class definition.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use--\"%s-\"-when-no-class-scope-is-active.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use--\"%s-\"-when-no-class-scope-is-active.html","name":"Cannot use \\\"%s\\\" when no class scope is active","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 11:31:13 +0000","dateModified":"Wed, 05 Aug 2026 11:31:13 +0000","description":"``self`` and ``static`` refer to the class in which the code is written, respectively as a fixed reference and one resolved at call time (late static binding)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use--\"%s-\"-when-no-class-scope-is-active.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

function foo() {
    return new self();
}

?>
```

## Literal Examples
+ Cannot use "self" when no class scope is active
+ Cannot use "static" when no class scope is active

## Alternatives
+ Use the actual class name instead of ``self`` or ``static``.
+ Move the code inside a class, trait, or enum.

## Related error messages
+ [cannot-use--"parent-"-when-no-class-scope-is-active](asdf)
+ [cannot-use--"parent-"-when-current-class-scope-has-no-parent](asdf)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()