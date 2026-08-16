# The modifiers of the trait method %s() are changed, but this method does not exist. Error

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-modifiers-of-the-trait-method-%s()-are-changed,-but-this-method-does-not-exist.-error.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-modifiers-of-the-trait-method-%s()-are-changed,-but-this-method-does-not-exist.-error.html","name":"The modifiers of the trait method %s() are changed, but this method does not exist. Error","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-06T15:27:15+02:00","dateModified":"2026-08-06T15:27:15+02:00","description":"Inside the ``use`` block of a class, a conflict-resolution rule can change the visibility of a trait method without renaming it, by writing ``method as visibility","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-modifiers-of-the-trait-method-%s()-are-changed,-but-this-method-does-not-exist.-error.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Inside the `use` block of a class, a conflict-resolution rule can change the visibility of a trait method without renaming it, by writing `method as visibility;` -- with no trait name before the method, and no new name after the modifier.

Here, `bar` is not qualified with a trait name, so PHP looks for a method called `bar` in every trait used by the class. Since none of them declares it, and the rule does not introduce an alias (there is no new name after `protected`), PHP reports that the modifiers of a non-existent method were changed, rather than reporting a missing alias target.

## Example

```php
<?php

trait A {
    public function foo() {}
}

class C {
    use A {
        bar as protected;
    }
}

?>
```

## Literal Examples
+ The modifiers of the trait method bar() are changed, but this method does not exist. Error

## Alternatives
+ Fix the typo in the method name so it matches an existing method of one of the used traits.
+ Remove the rule if changing the visibility of that method is no longer needed.

## Related error messages
+ [an-alias-was-defined-for-method-%s(),-which-exists-in-both-%s-and-%s.-use-%s::%s-or-%s::%s-to-resolve-the-ambiguity](an-alias-was-defined-for-method-%s\(\),-which-exists-in-both-%s-and-%s.-use-%s::%s-or-%s::%s-to-resolve-the-ambiguity.html)
+ [a-precedence-rule-was-defined-for-%s::%s-but-this-method-does-not-exist](a-precedence-rule-was-defined-for-%s::%s-but-this-method-does-not-exist.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()