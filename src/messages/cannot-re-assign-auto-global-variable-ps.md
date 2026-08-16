# Cannot re-assign auto-global variable %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-re-assign-auto-global-variable-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-re-assign-auto-global-variable-%s.html","name":"Cannot re-assign auto-global variable %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"It is not possible to use one of the superglobal variable names as argument of a method: such code hides the assignation that happens at call time, which will interfere with the ``$_POST`` variable being a global","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-re-assign-auto-global-variable-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
It is not possible to use one of the superglobal variable names as argument of a method: such code hides the assignation that happens at call time, which will interfere with the `$_POST` variable being a global. Hence, such syntax is forbidden. 

The error is not emitted when the same superglobal variables are used as variables, as it may be legit code.

This applies to all PHP superglobal, such as `$_ENV`, `$GLOBALS`, or `$_POST`. See the full list in annex.

## Example

```php
<?php

function foo($_POST) {

}

?>
```

## Literal Examples
+ Cannot re-assign auto-global variable $_POST

## Alternatives
+ Use a parameter anme that is not a superglobal or a special PHP variable.

## Related error messages
+ [cannot-re-assign-$this](cannot-re-assign-$this.html)
+ [cannot-use-auto-global-as-lexical-variable](cannot-use-auto-global-as-lexical-variable.html)
