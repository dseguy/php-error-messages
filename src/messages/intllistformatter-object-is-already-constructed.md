# IntlListFormatter object is already constructed

## Description
`IntlListFormatter`, added in PHP 8.5, wraps ICU's list formatter to render lists such as `"a, b, and c"` according to locale rules. Like other `intl` classes, its constructor guards against being run twice on the same object: the first successful call allocates the underlying ICU formatter, and a second call would leak that resource and leave the object in an inconsistent state.

Calling `__construct()` explicitly a second time -- directly, or indirectly through code that re-runs construction on an already built instance -- throws this error.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/intllistformatter-object-is-already-constructed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/intllistformatter-object-is-already-constructed.html","name":"IntlListFormatter object is already constructed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 25 Jul 2026 12:23:30 +0000","dateModified":"Sat, 25 Jul 2026 12:23:30 +0000","description":"``IntlListFormatter``, added in PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/intllistformatter-object-is-already-constructed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

$formatter = new IntlListFormatter('en_US');

// Calling the constructor a second time on the same instance
$formatter->__construct('fr_FR');

?>
```

## Alternatives
+ Create a new ``IntlListFormatter`` instance instead of reusing and reconstructing the same object.
+ Never call ``__construct()`` manually after the object has already been created with ``new``.

## Related error messages
+ [datetimezone-object-is-unconstructed](datetimezone-object-is-unconstructed.html)

## Related error messages
+ [IntlListFormatter](https://www.php.net/manual/en/class.intllistformatter.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()