# Cannot use \"parent\" when current class scope has no parent

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use--\"parent-\"-when-current-class-scope-has-no-parent.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use--\"parent-\"-when-current-class-scope-has-no-parent.html","name":"Cannot use \\\"parent\\\" when current class scope has no parent","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:18:58 +0000","dateModified":"Wed, 05 Aug 2026 14:18:58 +0000","description":"``parent::`` refers to the parent of the class currently being defined","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use--\"parent-\"-when-current-class-scope-has-no-parent.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`parent::` refers to the parent of the class currently being defined. It can only be used inside a class that actually extends another class.

Using `parent::` in a class that has no parent (no `extends` clause) used to only trigger a deprecation notice, in PHP 7.4. Since PHP 8.0, it is a compile time fatal error.

This differs from using `parent::` completely outside of any class scope, which is a separate error.

## Example

```php
<?php

class Foo {
    public function bar() {
        parent::bar();
    }
}

?>
```

## Alternatives
+ Make the class extend a parent class.
+ Remove the ``parent::`` call, and implement the logic directly in the method.

## Related error messages
+ [cannot-use--"parent-"-when-no-class-scope-is-active](cannot-use--parent--when-no-class-scope-is-active.html)
+ [cannot-use--"%s-"-when-no-class-scope-is-active](cannot-use--%s--when-no-class-scope-is-active.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[orphanedParent](orphanedParent)