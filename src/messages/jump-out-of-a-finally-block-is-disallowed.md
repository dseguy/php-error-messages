# jump out of a finally block is disallowed

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/jump-out-of-a-finally-block-is-disallowed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/jump-out-of-a-finally-block-is-disallowed.html","name":"jump out of a finally block is disallowed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-10-27T10:37:46+01:00","dateModified":"2025-03-24T18:28:14+01:00","description":"It is not possible to make a goto, when the label is in a finally block","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/jump-out-of-a-finally-block-is-disallowed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
It is not possible to make a goto, when the label is in a finally block. It is OK to do the goto call when both goto and label are in the finally block, though.

## Example

```php
<?php


try {}
catch (Exception) {}
finally {
	goto theLabel;
}

	theLabel: 
		$a++;

?>
```

## Alternatives
+ Replace the goto call with something else.
+ Move the goto after the finally block.
+ Move the label in the finally block.

## Related error messages
+ [jump-into-a-finally-block-is-disallowed](jump-into-a-finally-block-is-disallowed.html)
