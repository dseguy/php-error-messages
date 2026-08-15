# syntax error, unexpected variable "$task", expecting ")"

## Description
In a function, method or closure signature, each parameter must be separated from the next one by a comma. Here, the comma between `$name` and `$task` is missing, so once PHP has parsed `$name` as a complete, typed parameter, it expects either another comma or the closing parenthesis of the argument list; instead it finds another variable, `$task`.

This is the generic "unexpected variable, expecting )" message, reported here with the concrete variable name found in the offending code, `$task`.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-variable-\"$task\",-expecting-\")\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-variable-\"$task\",-expecting-\")\".html","name":"syntax error, unexpected variable \"$task\", expecting \")\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 07:12:31 +0000","dateModified":"Wed, 15 Jul 2026 07:12:31 +0000","description":"In a function, method or closure signature, each parameter must be separated from the next one by a comma","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-variable-\"$task\",-expecting-\")\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

function schedule(string $name $task) {}

?>
```

## Alternatives
+ Add the missing comma between the two parameters.
+ Remove the extra variable if it was left over from editing.

## Related error messages
+ [syntax-error,-unexpected-variable-"$%s",-expecting-")"](syntax-error,-unexpected-variable-$%s,-expecting-\).html)
+ [syntax-error,-unexpected-token-")",-expecting-variable](syntax-error,-unexpected-token-\),-expecting-variable.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()