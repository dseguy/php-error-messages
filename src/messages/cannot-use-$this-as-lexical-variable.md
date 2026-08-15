# Cannot use $this as lexical variable

## Description
A lexical variable is a variable imported into a closure via the `use` clause. Since PHP 8.1, `$this` is automatically available inside all closures defined in an object context, so it is no longer allowed to explicitly import it as a lexical variable. This is also true for arrow functions, which implicitly capture `$this` when defined inside a method.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-$this-as-lexical-variable.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-$this-as-lexical-variable.html","name":"Cannot use $this as lexical variable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 07:56:48 +0000","dateModified":"Mon, 13 Jul 2026 07:56:48 +0000","description":"A lexical variable is a variable imported into a closure via the ``use`` clause","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-$this-as-lexical-variable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
    function foo() {
        $fn = function () use ($this) {
            return $this;
        };
    }
}

(new X)->foo();

?>
```

## Alternatives
+ Remove ``$this`` from the ``use`` clause, since it is automatically available in the closure.
+ Use a ``static`` closure if ``$this`` is not needed.

## Related error messages
+ [closures-in-constant-expressions-must-be-static](closures-in-constant-expressions-must-be-static.html)
+ [using-$this-when-not-in-object-context](using-$this-when-not-in-object-context.html)
+ [cannot-use-auto-global-as-lexical-variable](cannot-use-auto-global-as-lexical-variable.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()