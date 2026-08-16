# syntax error, unexpected token "::", expecting "," or ";"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"::\",-expecting-\",\"-or-\";\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"::\",-expecting-\",\"-or-\";\".html","name":"syntax error, unexpected token \"::\", expecting \",\" or \";\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The object operator ``::`` is used in an expression, where it is not expected","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"::\",-expecting-\",\"-or-\";\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The object operator `::` is used in an expression, where it is not expected. 

Here, it is a global variable statement. Such statement were possible in PHP 5 and older, but are not valid anymore since PHP 7.0. Then, PHP would use the content of the property as the name of the global variable. 

The same error is emitted with static variables, with the `::` and the `->` operators.

## Example

```php
<?php

global $object::$property;

static $object::$property;

?>
```

## Alternatives
+ Remove the property or method call from the global instruction.

## Related error messages
+ [syntax-error,-unexpected-token-"?->",-expecting-","-or-";"](syntax-error,-unexpected-token-?->,-expecting-,-or-;.html)
+ [syntax-error,-unexpected-token-"->",-expecting-","-or-";"](syntax-error,-unexpected-token-->,-expecting-,-or-;.html)
