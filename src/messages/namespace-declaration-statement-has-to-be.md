# Namespace declaration statement has to be

## Description
A `namespace` declaration must be the very first statement of the file, or immediately follow a `declare()` call (such as `declare(strict_types=1);`). Any other statement, including a simple `echo`, a comment that generates output, or whitespace before the opening `<?php` tag, placed before the `namespace` statement makes it invalid.

The full message reads: `Namespace declaration statement has to be the very first statement or after any declare call in the script`.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/namespace-declaration-statement-has-to-be.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/namespace-declaration-statement-has-to-be.html","name":"Namespace declaration statement has to be","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:00:09 +0000","dateModified":"Wed, 05 Aug 2026 14:00:09 +0000","description":"A ``namespace`` declaration must be the very first statement of the file, or immediately follow a ``declare()`` call (such as ``declare(strict_types=1)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/namespace-declaration-statement-has-to-be.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

echo 'Hello';

namespace App;

?>
```

## Literal Examples
+ Namespace declaration statement has to be the very first statement or after any declare call in the script

## Alternatives
+ Move the ``namespace`` statement to be the first statement in the file, right after the opening ``<?php`` tag.
+ Only keep a ``declare()`` call before the ``namespace`` statement, and move everything else after it.
+ Remove any whitespace or output before the opening ``<?php`` tag.

## Related error messages
+ [no-code-may-exist-outside-of-namespace-{}](no-code-may-exist-outside-of-namespace-{}.html)
+ [strict_types-declaration-must-be-the-very-first-statement-in-the-script](strict\_types-declaration-must-be-the-very-first-statement-in-the-script.html)
+ [cannot-mix-bracketed-namespace-declarations](cannot-mix-bracketed-namespace-declarations.html)
+ [encoding-declaration-pragma-must-be](encoding-declaration-pragma-must-be.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()