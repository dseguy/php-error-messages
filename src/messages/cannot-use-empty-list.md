# Cannot use empty list

## Description
list() must contain at least one non-empty element. Otherwise, it would attempt to load data into no variables, and that makes no sense.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-empty-list.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-empty-list.html","name":"Cannot use empty list","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"list() must contain at least one non-empty element","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-empty-list.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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
+ [cannot-use-positional-argument-after-named-argument](asdf)
