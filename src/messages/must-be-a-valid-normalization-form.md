# must be a valid normalization form

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-valid-normalization-form.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-valid-normalization-form.html","name":"must be a valid normalization form","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-26T09:15:39+00:00","dateModified":"2026-08-26T09:15:39+00:00","description":"``Normalizer::normalize()`` and ``Normalizer::isNormalized()`` accept a ``$form`` argument built from ICU's Unicode normalization forms: ``Normalizer::FORM_D``, ``::FORM_KD``, ``::FORM_C`` (the default), ``::FORM_KC``, or ``::FORM_KC_CF``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-valid-normalization-form.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`Normalizer::normalize()` and `Normalizer::isNormalized()` accept a `$form` argument built from ICU's Unicode normalization forms: `Normalizer::FORM_D`, `::FORM_KD`, `::FORM_C` (the default), `::FORM_KC`, or `::FORM_KC_CF`. Any other integer does not correspond to a form ICU knows how to normalize to.

This has thrown a `ValueError` since PHP 8.0; PHP 8.6 only corrected a typo in the message text itself, which previously doubled the word "a".

## Example

```php
<?php

Normalizer::normalize('café', 999);

?>
```

## Literal Examples
+ Normalizer::normalize(): Argument #2 ($form) must be a valid normalization form
+ Normalizer::isNormalized(): Argument #2 ($form) must be a valid normalization form

## Alternatives
+ Pass one of Normalizer::FORM_D, ::FORM_KD, ::FORM_C, ::FORM_KC, or ::FORM_KC_CF as the $form argument.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[PHP 8.0 through 8.5 threw the same ValueError but with a typo in the message: "must be a a valid normalization form" (doubled "a").](PHP 8.0 through 8.5 threw the same ValueError but with a typo in the message: "must be a a valid normalization form" (doubled "a").)