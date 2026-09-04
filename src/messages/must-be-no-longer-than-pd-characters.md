# must be no longer than %d characters

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-no-longer-than-pd-characters.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-no-longer-than-pd-characters.html","name":"must be no longer than %d characters","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-30T11:59:47+02:00","dateModified":"2026-08-30T11:59:47+02:00","description":"``IntlNumberRangeFormatter::createFromSkeleton()``'s ``$locale`` argument is validated against ICU's internal locale-name length limit before being parsed, the same limit enforced elsewhere across the intl extension","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-no-longer-than-pd-characters.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`IntlNumberRangeFormatter::createFromSkeleton()`'s `$locale` argument is validated against ICU's internal locale-name length limit before being parsed, the same limit enforced elsewhere across the intl extension.

Passing a `$locale` string longer than that limit throws a `ValueError`, instead of handing an oversized buffer to ICU's locale parser.

## Example

```php
<?php

IntlNumberRangeFormatter::createFromSkeleton(
    '',
    str_repeat('a', 200),
    IntlNumberRangeFormatter::COLLAPSE_AUTO,
    IntlNumberRangeFormatter::IDENTITY_FALLBACK_RANGE
);

?>
```

## Literal Examples
+ IntlNumberRangeFormatter::createFromSkeleton(): Argument #2 ($locale) must be no longer than 156 characters

## Alternatives
+ Use a locale identifier no longer than ICU's maximum locale length (156 characters) when calling IntlNumberRangeFormatter::createFromSkeleton().

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()