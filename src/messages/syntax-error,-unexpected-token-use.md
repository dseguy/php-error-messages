# syntax error, unexpected token "use"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-use.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-use.html","name":"syntax error, unexpected token \"use\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:47+00:00","dateModified":"2026-03-31T09:10:47+00:00","description":"``use`` expression must be place at the top level of a file, a namespace block, or a class, enum or trait block","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-use.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`use` expression must be place at the top level of a file, a namespace block, or a class, enum or trait block. 

In particular, when set in a structure such as a `foreach`, it yields a syntax error. 

Besides that, the command is actually valid.

## Example

```php
<?php 
if ($a) {
    use stdClass as A;
}

?>
```

## Alternatives
+ Move the ``use`` out of the if structure.
+ Remove the ``use`` command.

## Related error messages
+ [syntax-error,-unexpected-token-"use",-expecting-","-or-";"](syntax-error,-unexpected-token-use,-expecting-,-or-;.html)
