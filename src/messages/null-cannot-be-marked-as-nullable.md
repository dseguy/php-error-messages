# null cannot be marked as nullable

## Description
Since PHP 8.2, `null` (like `false` and `true`) can be used directly as a standalone type. But `null` already means exactly one thing: the value `null`. Marking it nullable with a leading `?`, as in `?null`, would only mean `null or null`, which is entirely redundant, so PHP rejects it.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/null-cannot-be-marked-as-nullable.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/null-cannot-be-marked-as-nullable.html","name":"null cannot be marked as nullable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 27 Jul 2026 16:18:18 +0000","dateModified":"Mon, 27 Jul 2026 16:18:18 +0000","description":"Since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/null-cannot-be-marked-as-nullable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

function test(): ?null
{
}

?>
```

## Literal Examples
+ null cannot be marked as nullable

## Alternatives
+ Remove the ``?`` and use ``null`` on its own.

## Related error messages
+ [type-contains-both-true-and-false,-bool-must-be-used-instead](asdf)
+ [duplicate-type-%s-is-redundant](asdf)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()