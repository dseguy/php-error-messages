# Cannot use $this as global variable

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-$this-as-global-variable.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-$this-as-global-variable.html","name":"Cannot use $this as global variable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 08:09:50 +0000","dateModified":"Mon, 13 Jul 2026 08:09:50 +0000","description":"The pseudo-variable ``$this`` is automatically available inside every method of a class, and refers to the current object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-$this-as-global-variable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The pseudo-variable `$this` is automatically available inside every method of a class, and refers to the current object. It is not possible to import `$this` into the global symbol table using the `global` keyword. `$this` is special and not a regular variable that may be made global.

## Example

```php
<?php

class X {
    function foo() {
        global $this;
    }
}

(new X)->foo();

?>
```

## Alternatives
+ Use ``$this`` directly inside the method, without importing it as global.
+ Pass the object as a parameter to the function that needs it.

## Related error messages
+ [cannot-re-assign-$this](cannot-re-assign-$this.html)
+ [using-$this-when-not-in-object-context](using-$this-when-not-in-object-context.html)
+ [cannot-use-auto-global-as-lexical-variable](cannot-use-auto-global-as-lexical-variable.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()