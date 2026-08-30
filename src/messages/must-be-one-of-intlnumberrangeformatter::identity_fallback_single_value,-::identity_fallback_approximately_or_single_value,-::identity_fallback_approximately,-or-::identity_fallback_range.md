# must be one of IntlNumberRangeFormatter::IDENTITY_FALLBACK_SINGLE_VALUE, ::IDENTITY_FALLBACK_APPROXIMATELY_OR_SINGLE_VALUE, ::IDENTITY_FALLBACK_APPROXIMATELY, or ::IDENTITY_FALLBACK_RANGE

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-one-of-intlnumberrangeformatter::identity_fallback_single_value,-::identity_fallback_approximately_or_single_value,-::identity_fallback_approximately,-or-::identity_fallback_range.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-one-of-intlnumberrangeformatter::identity_fallback_single_value,-::identity_fallback_approximately_or_single_value,-::identity_fallback_approximately,-or-::identity_fallback_range.html","name":"must be one of IntlNumberRangeFormatter::IDENTITY_FALLBACK_SINGLE_VALUE, ::IDENTITY_FALLBACK_APPROXIMATELY_OR_SINGLE_VALUE, ::IDENTITY_FALLBACK_APPROXIMATELY, or ::IDENTITY_FALLBACK_RANGE","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-24T22:28:02+02:00","dateModified":"2026-08-24T22:28:02+02:00","description":"``IntlNumberRangeFormatter::createFromSkeleton()`` builds a formatter for numeric ranges (such as ``3-5``)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-one-of-intlnumberrangeformatter::identity_fallback_single_value,-::identity_fallback_approximately_or_single_value,-::identity_fallback_approximately,-or-::identity_fallback_range.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`IntlNumberRangeFormatter::createFromSkeleton()` builds a formatter for numeric ranges (such as `3-5`). Its `identityFallback` argument tells ICU what to do when the range's start and end turn out to be identical after formatting, and only four such fallback strategies exist: `IDENTITY_FALLBACK_SINGLE_VALUE`, `IDENTITY_FALLBACK_APPROXIMATELY_OR_SINGLE_VALUE`, `IDENTITY_FALLBACK_APPROXIMATELY`, and `IDENTITY_FALLBACK_RANGE`.

Passing any other integer raises a `ValueError`, since ICU's range formatter has no other identity-fallback behavior to fall back to.

## Example

```php
<?php

IntlNumberRangeFormatter::createFromSkeleton(
    '',
    'en',
    IntlNumberRangeFormatter::COLLAPSE_AUTO,
    999
);

?>
```

## Literal Examples
+ IntlNumberRangeFormatter::createFromSkeleton(): Argument #4 ($identityFallback) must be one of IntlNumberRangeFormatter::IDENTITY_FALLBACK_SINGLE_VALUE, IntlNumberRangeFormatter::IDENTITY_FALLBACK_APPROXIMATELY_OR_SINGLE_VALUE, IntlNumberRangeFormatter::IDENTITY_FALLBACK_APPROXIMATELY, or IntlNumberRangeFormatter::IDENTITY_FALLBACK_RANGE

## Alternatives
+ Pass one of ``IntlNumberRangeFormatter::IDENTITY_FALLBACK_SINGLE_VALUE``, ``::IDENTITY_FALLBACK_APPROXIMATELY_OR_SINGLE_VALUE``, ``::IDENTITY_FALLBACK_APPROXIMATELY``, or ``::IDENTITY_FALLBACK_RANGE`` as the ``identityFallback`` argument.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()