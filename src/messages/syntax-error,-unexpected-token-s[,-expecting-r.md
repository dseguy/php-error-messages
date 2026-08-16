# syntax error, unexpected token "#[", expecting ")"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"#[\",-expecting-\")\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"#[\",-expecting-\")\".html","name":"syntax error, unexpected token \"#[\", expecting \")\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-07-15T07:12:10+00:00","dateModified":"2026-07-15T07:12:10+00:00","description":"Attributes can only be placed in front of the declarations that support them, such as classes, functions, methods and parameters","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"#[\",-expecting-\")\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Attributes can only be placed in front of the declarations that support them, such as classes, functions, methods and parameters. A `catch` block's caught-exception clause does not accept an attribute: PHP was expecting the closing parenthesis of the `catch (...)` clause, and found the beginning of an attribute, `#[`, instead.

## Example

```php
<?php

try {
} catch (Exception #[SomeAttribute] $e) {
}

?>
```

## Alternatives
+ Remove the attribute from the ``catch`` clause.
+ Move the attribute to a declaration that supports it, such as the enclosing method.

## Related error messages
+ [syntax-error,-unexpected-token-")",-expecting-variable](syntax-error,-unexpected-token-\),-expecting-variable.html)

## Related error messages
+ [Attributes](https://www.php.net/manual/en/language.attributes.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()