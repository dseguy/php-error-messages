# Using ${expr} (variable variables) in strings is deprecated, use {${expr}} instead

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-${expr}-(variable-variables)-in-strings-is-deprecated,-use-{${expr}}-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-${expr}-(variable-variables)-in-strings-is-deprecated,-use-{${expr}}-instead.html","name":"Using ${expr} (variable variables) in strings is deprecated, use {${expr}} instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"The interpolation syntax ``${expression}`` is deprecated","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-${expr}-(variable-variables)-in-strings-is-deprecated,-use-{${expr}}-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The interpolation syntax `${expression}` is deprecated. It takes an expression (here, a concatenation) to build the name of the variable that is used in the end. It is recommended to update the syntax with a compatible one or use concatenation, before the syntax is removed.

## Example

```php
<?php

$foo = 'bar';
$bar = 'xyz';
var_dump("foo is $\{$foo}");

?>
```

## Alternatives
+ Use ``{}`` instead.
+ Use concatenation instead.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[dollar_curly_expression](dollar_curly_expression)