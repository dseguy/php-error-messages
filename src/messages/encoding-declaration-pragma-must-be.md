# Encoding declaration pragma must be

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/encoding-declaration-pragma-must-be.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/encoding-declaration-pragma-must-be.html","name":"Encoding declaration pragma must be","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 27 Jul 2026 16:18:15 +0000","dateModified":"Mon, 27 Jul 2026 16:18:15 +0000","description":"The ``declare(encoding = ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/encoding-declaration-pragma-must-be.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `declare(encoding = ...)` pragma sets the source encoding PHP uses to parse the rest of the script, so, like `strict_types`, it has to be known before anything else in the file is compiled. It must therefore be the very first statement in the script, exactly like the `strict_types` declaration.

The full message reads: `Encoding declaration pragma must be the very first statement in the script`. In practice, this directive only has an effect when the `zend.multibyte` ini setting is enabled; otherwise it is silently ignored, but the placement rule is still enforced.

## Example

```php
<?php

echo 'Hello';

declare(encoding = 'ISO-8859-1');

?>
```

## Literal Examples
+ Encoding declaration pragma must be the very first statement in the script

## Alternatives
+ Move the ``declare(encoding = ...)`` statement to be the very first statement in the file.
+ Remove any characters or statements placed before the opening ``<?php`` tag.

## Related error messages
+ [strict_types-declaration-must-be-the-very-first-statement-in-the-script](strict\_types-declaration-must-be-the-very-first-statement-in-the-script.html)
+ [namespace-declaration-statement-has-to-be](namespace-declaration-statement-has-to-be.html)
+ [declare(%s)-value-must-be-a-literal](declare\(%s\)-value-must-be-a-literal.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()