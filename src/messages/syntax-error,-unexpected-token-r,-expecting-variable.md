# syntax error, unexpected token ")", expecting variable

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\")\",-expecting-variable.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\")\",-expecting-variable.html","name":"syntax error, unexpected token \")\", expecting variable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 18:57:15 +0000","dateModified":"Wed, 15 Jul 2026 18:57:15 +0000","description":"An attribute placed inside a parameter list must be immediately followed by the parameter it decorates","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\")\",-expecting-variable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
An attribute placed inside a parameter list must be immediately followed by the parameter it decorates. Here, the attribute is the last thing before the closing parenthesis, so PHP expects a variable to declare the parameter, but finds the closing parenthesis instead.

## Example

```php
<?php

function foo(string $a, #[SomeAttribute]) {}

?>
```

## Alternatives
+ Add the missing parameter, with its ``$`` variable, right after the attribute.
+ Remove the trailing attribute if no extra parameter was intended.

## Related error messages
+ [syntax-error,-unexpected-token-"#[",-expecting-")"](syntax-error,-unexpected-token-#\[,-expecting-\).html)
+ [syntax-error,-unexpected-token-"{",-expecting-variable](syntax-error,-unexpected-token-{,-expecting-variable.html)
+ [syntax-error,-unexpected-variable-"$%s",-expecting-")"](syntax-error,-unexpected-variable-$%s,-expecting-\).html)
+ [syntax-error,-unexpected-variable-"$task",-expecting-")"](syntax-error,-unexpected-variable-$task,-expecting-\).html)

## Related error messages
+ [Attributes](https://www.php.net/manual/en/language.attributes.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()