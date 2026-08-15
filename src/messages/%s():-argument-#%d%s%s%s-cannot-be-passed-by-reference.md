# %s(): Argument #%d%s%s%s cannot be passed by reference

## Description
Passing a literal value, a constant or `$GLOBALS` where a reference is requested leads to this error. 

For literal and constants, global or class, this is due to the value that can't be modified. It must be put in a variable first.

For `$GLOBALS`, it is to prevent modifications of its values. It makes the error message a bit surprising. This doesn't apply to other PHP variables.

A reference argument expected a variable, a property, static or not, or an array element. Usually, a variable is the best choice.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s():-argument-#%d%s%s%s-cannot-be-passed-by-reference.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s():-argument-#%d%s%s%s-cannot-be-passed-by-reference.html","name":"%s(): Argument #%d%s%s%s cannot be passed by reference","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 08:34:43 +0000","dateModified":"Mon, 13 Jul 2026 08:34:43 +0000","description":"Passing a literal value, a constant or ``$GLOBALS`` where a reference is requested leads to this error","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s():-argument-#%d%s%s%s-cannot-be-passed-by-reference.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

function foo(&$arg) {}

// passing a literal
foo([]);
// passing $GLOBALS
foo($GLOBALS);

// trying to trim spaces on all GLOBALS
array_walk( $GLOBALS, trim(...));

?>
```

## Literal Examples
+ array_walk(): Argument #1 $GLOBALS cannot be passed by reference

## Alternatives
+ Copy ``$GLOBALS`` to a variable and pass this variable.
+ Copy the constant value to a variable and pass this variable.
+ Copy the literal value to a variable and pass this variable.

## Related error messages
+ [cannot-acquire-reference-to-$globals](cannot-acquire-reference-to-$globals.html)
+ [only-variable-references-should-be-returned-by-reference](only-variable-references-should-be-returned-by-reference.html)

In previous PHP versions, this error message used to be :ref:`cannot-pass-parameter-%d-by-reference`.