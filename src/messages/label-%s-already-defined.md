# Label '%s' already defined

## Description
A goto label has been defined twice or more. This is not allowed, as the `goto` call won't be able to decide which label to reach. 

Note that a single unused label is allowed, and is considered dead code. 

Multiple identical labels are possible, in different method contexts.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/label-'%s'-already-defined.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/label-'%s'-already-defined.html","name":"Label '%s' already defined","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"A goto label has been defined twice or more","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/label-'%s'-already-defined.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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
