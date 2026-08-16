# Cannot use $this as static variable

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-$this-as-static-variable.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-$this-as-static-variable.html","name":"Cannot use $this as static variable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-06T15:27:15+02:00","dateModified":"2026-08-06T15:27:15+02:00","description":"``$this`` is a special variable, automatically bound to the current object inside a method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-$this-as-static-variable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`$this` is a special variable, automatically bound to the current object inside a method. It cannot be redefined, in particular by making it a `static` variable, which would give it a persistent value between calls and remove its automatic binding to the object.

This is checked at compile time, whether the method is ever called or not.

## Example

```php
<?php

class X {
    public function foo() {
        static $this;
    }
}

?>
```

## Alternatives
+ Use another variable name for the static variable.
+ Store the required data in a property of the object instead.

## Related error messages
+ [cannot-use-$this-as-parameter](cannot-use-$this-as-parameter.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()