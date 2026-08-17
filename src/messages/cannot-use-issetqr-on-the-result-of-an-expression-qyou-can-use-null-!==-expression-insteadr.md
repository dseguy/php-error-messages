# Cannot use isset() on the result of an expression (you can use "null !== expression" instead)

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-issetqr-on-the-result-of-an-expression-qyou-can-use-null-!==-expression-insteadr.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-issetqr-on-the-result-of-an-expression-qyou-can-use-null-!==-expression-insteadr.html","name":"Cannot use isset() on the result of an expression (you can use \"null !== expression\" instead)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-05T14:00:09+00:00","dateModified":"2026-08-05T14:00:09+00:00","description":"isset() is meant to check the existence of an data container, such as a variable, an array element, a property of an object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-issetqr-on-the-result-of-an-expression-qyou-can-use-null-!==-expression-insteadr.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
isset() is meant to check the existence of an data container, such as a variable, an array element, a property of an object. It is not meant to check if an expression is null, because it is not a data container. 

Expressions are valid with isset within a data container, though.

## Example

```php
<?php

$a = 'a';
$b = 'b';
if (isset($a . $b)) {}

// recommended by the error itself
if ($a . $b !== null) {}

// expression are valid with isset within a data container
if (isset($array[$a . $b])) {}
if (isset(${$a . $b})) {}

?>
```

## Alternatives
+ Use a comparison to null with an expression.

## Related error messages
+ [cannot-use-isset()-on-the-result-of-an-expression](cannot-use-isset\(\)-on-the-result-of-an-expression.html)
