# syntax error, unexpected 'elseif'

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-'elseif'.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-'elseif'.html","name":"syntax error, unexpected 'elseif'","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The ``elseif`` must follow a ``if`` structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-'elseif'.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `elseif` must follow a `if` structure. It cannot be used alone, not be used after a `else` clause.

## Example

```php
<?php

// elseif cannot be standalone 
elseif ($a === 1) {
    echo 2;
}

// else has closed the if structure, not more elseif allowed
if ($condition) {}
else {} 
elseif ($a === 1) {
    echo 2;
}

// the endif; has already closed the if structure.
if ($condition):

endif;
elseif ($a === 1) :
    echo 2;
endif;

?>
```

## Alternatives
+ Ensure that there is a previous ``if`` structure, with one ``then`` block, and optionally, other ``elseif`` block.
+ Ensure that there is no previous ``else`` clause.
+ Ensure that there is no previous ``endif`` keyword.
