# Cannot use isset() on the result of an expression

## Description
isset() checks whether a data container, such as a variable, an array element or an object property, exists and is not null; it needs an actual container to look up, not a computed value. Concatenating $a and $b produces a plain expression with no container behind it, so isset() cannot be applied to it directly.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-isset()-on-the-result-of-an-expression.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-isset()-on-the-result-of-an-expression.html","name":"Cannot use isset() on the result of an expression","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 30 Jul 2026 07:30:22 +0000","dateModified":"Thu, 30 Jul 2026 07:30:22 +0000","description":"isset() checks whether a data container, such as a variable, an array element or an object property, exists and is not null","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-isset()-on-the-result-of-an-expression.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

$a = 'a';
$b = 'b';

if (isset($a . $b)) {}

// recommended alternative
if ($a . $b !== null) {}

?>
```

## Alternatives
+ Compare the expression to null instead: $a . $b !== null.

## Related error messages
+ [cannot-use-isset()-on-the-result-of-an-expression-(you-can-use-"null-!==-expression"-instead)](cannot-use-isset\(\)-on-the-result-of-an-expression-\(you-can-use-null-!==-expression-instead\).html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()