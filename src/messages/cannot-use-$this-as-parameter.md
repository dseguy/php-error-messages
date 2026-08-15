# Cannot use $this as parameter

## Description
Cannot use $this as parameter. Using $this as a method parameter is not allowed in PHP.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-$this-as-parameter.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-$this-as-parameter.html","name":"Cannot use $this as parameter","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:00:09 +0000","dateModified":"Wed, 05 Aug 2026 14:00:09 +0000","description":"Cannot use $this as parameter","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-$this-as-parameter.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

    function foo($this) { }

?>
```

## Alternatives
+ Pass the object as a parameter by creating a method that accepts an object parameter instead.

## Related error messages
+ [cannot-use-$this-as-static-variable](asdf)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()