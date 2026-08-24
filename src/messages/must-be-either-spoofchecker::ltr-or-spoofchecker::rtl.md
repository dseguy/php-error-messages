# must be either Spoofchecker::LTR or Spoofchecker::RTL

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-either-spoofchecker::ltr-or-spoofchecker::rtl.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-either-spoofchecker::ltr-or-spoofchecker::rtl.html","name":"must be either Spoofchecker::LTR or Spoofchecker::RTL","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-24T20:16:02+00:00","dateModified":"2026-08-24T20:16:02+00:00","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-either-spoofchecker::ltr-or-spoofchecker::rtl.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP 8.6 adds `Spoofchecker::getBidiSkeleton()` and `Spoofchecker::areBidiConfusable()`, which compute (or compare) the visual `skeleton` of a string for a given text direction, used to detect visually-confusable identifiers that mix left-to-right and right-to-left scripts. Both methods take a `$direction` argument that only accepts two values: `Spoofchecker::LTR` or `Spoofchecker::RTL`.

Passing any other integer raises a `ValueError`, since ICU's bidi skeleton algorithm only knows how to reason about text in one of these two directions.

## Example

```php
<?php

$checker = new Spoofchecker();

$checker->getBidiSkeleton(99, 'paypal');

?>
```

## Literal Examples
+ Spoofchecker::getBidiSkeleton(): Argument #1 ($direction) must be either Spoofchecker::LTR or Spoofchecker::RTL
+ Spoofchecker::areBidiConfusable(): Argument #1 ($direction) must be either Spoofchecker::LTR or Spoofchecker::RTL

## Alternatives
+ Pass either ``Spoofchecker::LTR`` or ``Spoofchecker::RTL`` as the ``$direction`` argument.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()