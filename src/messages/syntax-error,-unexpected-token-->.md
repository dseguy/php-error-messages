# syntax error, unexpected token "->"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"->\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"->\".html","name":"syntax error, unexpected token \"->\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"This error reports that the object syntax was not expected there","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"->\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error reports that the object syntax was not expected there. 

One classic reason is the new syntax in PHP 8.4, where parenthesis are not necessary, right after a new, to call properties or methods. This syntax actually requires the parenthesis.

Another situation arise when a space is inserted between the `?` and the `->` operator. The space let PHP believe that a ternary operator is started, yet the `->` must be applied to an object.

## Example

```php
<?php

// should be new X()->method();
new X->method();

// wrongly build null object operator
echo $obj ?
    -> foo;

?>
```

## Alternatives
+ Add the parenthesis on the ``new`` call.
+ Write the ``?->`` without spaces.

## Related error messages
+ [syntax-error,-unexpected-token-"?->"](syntax-error,-unexpected-token-?->.html)
