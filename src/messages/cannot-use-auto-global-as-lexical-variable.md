# Cannot use auto-global as lexical variable

## Description
A lexical variable is the variables used in the `use` part of a closure definition. These variable will be imported in the closure. In this case, the variable is an auto-global variable, which is included in every context, so this is useless.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-auto-global-as-lexical-variable.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-auto-global-as-lexical-variable.html","name":"Cannot use auto-global as lexical variable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 08:33:27 +0000","dateModified":"Mon, 13 Jul 2026 08:33:27 +0000","description":"A lexical variable is the variables used in the ``use`` part of a closure definition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-auto-global-as-lexical-variable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

    function () use ($_POST) { };

?>
```

## Alternatives
+ Remove the auto-global from the list of imported variable (in the use clause).
+ Remove the use clause, if that variable is there alone.

## Related error messages
+ [cannot-re-assign-$this](asdf)
+ [cannot-re-assign-auto-global-variable-%s](asdf)
+ [cannot-use-$this-as-global-variable](asdf)
+ [cannot-use-$this-as-lexical-variable](asdf)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()