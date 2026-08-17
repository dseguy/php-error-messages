# syntax error, unexpected variable "$task", expecting ")"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-variable-$task,-expecting-r.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-variable-$task,-expecting-r.html","name":"syntax error, unexpected variable \"$task\", expecting \")\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-07-15T07:12:31+00:00","dateModified":"2026-07-15T07:12:31+00:00","description":"In a function, method or closure signature, each parameter must be separated from the next one by a comma","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-variable-$task,-expecting-r.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
In a function, method or closure signature, each parameter must be separated from the next one by a comma. Here, the comma between `$name` and `$task` is missing, so once PHP has parsed `$name` as a complete, typed parameter, it expects either another comma or the closing parenthesis of the argument list; instead it finds another variable, `$task`.

This is the generic "unexpected variable, expecting )" message, reported here with the concrete variable name found in the offending code, `$task`.

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