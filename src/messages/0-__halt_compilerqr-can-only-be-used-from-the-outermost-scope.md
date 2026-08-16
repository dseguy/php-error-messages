# 0 __HALT_COMPILER() can only be used from the outermost scope

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/0-__halt_compiler()-can-only-be-used-from-the-outermost-scope.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/0-__halt_compiler()-can-only-be-used-from-the-outermost-scope.html","name":"0 __HALT_COMPILER() can only be used from the outermost scope","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-07-30T10:03:45+02:00","dateModified":"2026-07-30T10:03:45+02:00","description":"__HALT_COMPILER() stops the compiler at the exact point it is encountered","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/0-__halt_compiler()-can-only-be-used-from-the-outermost-scope.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
__HALT_COMPILER() stops the compiler at the exact point it is encountered; everything that follows in the file is no longer parsed as PHP code but kept as raw data, readable through the __COMPILER_HALT_OFFSET__ constant and a file handle on the same script. Because it changes how the rest of the file is interpreted, it is only meaningful once, at the very top level of the file, and cannot be placed inside a function, a class, a conditional block, or any other nested structure. The leading "0" in this entry's error text is a data artifact and not part of the actual PHP message.

## Example

```php
<?php

function boot() {
	__halt_compiler();
}

boot();

?>
```

## Alternatives
+ Move the __halt_compiler() call out of the function/class/block, to the outermost level of the file.

## Related error messages
+ [halt_compiler()-can-only-be-used-from-the-outermost-scope](\_\_halt\_compiler\(\)-can-only-be-used-from-the-outermost-scope.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()