# jump into a finally block is disallowed

## Description
It is not possible to make a goto, when the label is in a finally block. It is OK to do the goto call when both goto and label are in the finally block, though.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/jump-into-a-finally-block-is-disallowed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/jump-into-a-finally-block-is-disallowed.html","name":"jump into a finally block is disallowed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"It is not possible to make a goto, when the label is in a finally block","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/jump-into-a-finally-block-is-disallowed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

goto theLabel;

try {}
catch (Exception) {}
finally {
	theLabel: 
		$a++;
}

?>
```

## Alternatives
+ Replace the goto call with something else.
+ Move the goto in the finally block.
+ Move the label out of the finally block.

## Related error messages
+ [jump-out-of-a-finally-block-is-disallowed](asdf)
