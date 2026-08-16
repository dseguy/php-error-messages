# Cannot use empty list

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-empty-list.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-empty-list.html","name":"Cannot use empty list","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-01-27T19:23:52+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"list() must contain at least one non-empty element","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-empty-list.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
list() must contain at least one non-empty element. Otherwise, it would attempt to load data into no variables, and that makes no sense.

## Example

```php
<?php

[,,,] = [1,2,3];
list(,,,) = [1,2,3];

?>
```

## Alternatives
+ Add at least one variable in the list() call.
+ Remove the call to list().

## Related error messages
+ [cannot-use-positional-argument-after-named-argument](cannot-use-positional-argument-after-named-argument.html)
