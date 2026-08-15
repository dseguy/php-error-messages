# Cannot use "parent" when current class scope has no parent

## Description
`parent` keyword represents the first available class in the current class hierarchy. A class has a `parent` class, when that class uses the `extends` keyword. When the current class has no such keyword, it has no `parent` and cannot use it.

This error applies to `parent` as a class descriptor or as a type.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-\"parent\"-when-current-class-scope-has-no-parent.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-\"parent\"-when-current-class-scope-has-no-parent.html","name":"Cannot use \"parent\" when current class scope has no parent","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"``parent`` keyword represents the first available class in the current class hierarchy","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-\"parent\"-when-current-class-scope-has-no-parent.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
    function foo(parent $y) {
        parent::goo();
    }
}

?>
```

## Alternatives
+ Add a parent to the current class.
+ Use another class name, instead of ``parent``: for example, the actual name of the target class, rather than the relative one.

In previous PHP versions, this error message used to be :ref:`parameter-uses-'parent'-as-type-hint-although-class-does-not-have-a-parent!`.