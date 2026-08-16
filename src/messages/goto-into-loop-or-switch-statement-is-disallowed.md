# 'goto' into loop or switch statement is disallowed

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/'goto'-into-loop-or-switch-statement-is-disallowed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/'goto'-into-loop-or-switch-statement-is-disallowed.html","name":"'goto' into loop or switch statement is disallowed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"It is not possible to put a label inside a loop (for, foreach, while, do","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/'goto'-into-loop-or-switch-statement-is-disallowed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
It is not possible to put a label inside a loop (for, foreach, while, do...while...) or a switch call. Such statement have to be initialized before execution, and the goto would cut short this crucial step.

On the other hand, it is possible to jump from a loop or a switch to outside that structure: then, it terminates it.

It is also possible to use a goto within a loop and a switch.

This is a compilation error: it is detected before execution.

## Example

```php
<?php

function foo() {
	goto A;
	
	foreach($a as $b) {
		A:
	}
}

function bar() {
	goto A;
	
	switch($a) {
		case 1:
			A:
			
			break;
	}
}

?>
```

## Alternatives
+ Create a separate method to handle this specific case.
