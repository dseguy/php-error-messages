# Label '%s' already defined

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/label-ps-already-defined.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/label-ps-already-defined.html","name":"Label '%s' already defined","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-08-22T08:03:56+02:00","dateModified":"2025-02-16T12:47:22-05:00","description":"A goto label has been defined twice or more","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/label-ps-already-defined.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A goto label has been defined twice or more. This is not allowed, as the `goto` call won't be able to decide which label to reach. 

Note that a single unused label is allowed, and is considered dead code. 

Multiple identical labels are possible, in different method contexts.

## Example

```php
<?php

function foo() {
	C:
	C:
	
	// valid code, though dead and unused
	D: 
}

function bar() {
	// valid code, though dead and unused
	D: 
}

?>
```

## Literal Examples
+ Label 'C' already defined

## Alternatives
+ Remove duplicate label.
+ Rename duplicate label.
+ Move the duplicate label to a distinct method.
