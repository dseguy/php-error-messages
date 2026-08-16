# 'goto' to undefined label '%s'

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/'goto'-to-undefined-label-'%s'.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/'goto'-to-undefined-label-'%s'.html","name":"'goto' to undefined label '%s'","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"This error is displayed when a goto command has no corresponding label in the method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/'goto'-to-undefined-label-'%s'.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error is displayed when a goto command has no corresponding label in the method. 

This is an compilation error: it is only reported before execution.

On the other hand, a label without a goto is not reported.

## Example

```php
<?php

function foo() {
	goto A;
	A:
	goto B;
	// Not such label as B:
	
	// A orphan label
	C:
}

?>
```

## Literal Examples
+ 'goto' to undefined label 'THEN'

## Alternatives
+ Create the missing label.
+ Remove the goto call.
+ Rename the goto call.
