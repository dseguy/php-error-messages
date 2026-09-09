# Calling stream_context_set_option() with 2 arguments is deprecated,

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-stream_context_set_optionqr-with-2-arguments-is-deprecated,.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-stream_context_set_optionqr-with-2-arguments-is-deprecated,.html","name":"Calling stream_context_set_option() with 2 arguments is deprecated,","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-09T14:14:00+00:00","dateModified":"2026-09-09T14:14:00+00:00","description":"``stream_context_set_option()`` originally accepted two call shapes: a 4-argument form setting a single ``wrapper``\/``option``\/``value`` triple, and a 2-argument form that instead took a whole nested ``[\"wrapper\"][\"option\"] = value`` array in place of the last three arguments","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-stream_context_set_optionqr-with-2-arguments-is-deprecated,.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`stream_context_set_option()` originally accepted two call shapes: a 4-argument form setting a single `wrapper`/`option`/`value` triple, and a 2-argument form that instead took a whole nested `["wrapper"]["option"] = value` array in place of the last three arguments. Overloading a single function with such different shapes made the signature hard to express with proper types.

PHP 8.3 added a dedicated `stream_context_set_options()` function for the array form. As of PHP 8.4, calling `stream_context_set_option()` with only 2 arguments is deprecated in favor of that new function.

## Example

```php
<?php

$context = stream_context_create();

// 2-argument form: context + a full ["wrapper"]["option"] = value array
stream_context_set_option($context, ['http' => ['method' => 'POST']]);

?>
```

## Literal Examples
+ Calling stream_context_set_option() with 2 arguments is deprecated, use stream_context_set_options() instead

## Alternatives
+ Use stream_context_set_options($context, $options) instead of stream_context_set_option($context, $options) for the array form.
+ Use the 4-argument form, stream_context_set_option($context, $wrapper, $option, $value), to set a single option.

## Related error messages
+ [calling-%s()-with-2-arguments-is-deprecated,](calling-%s\(\)-with-2-arguments-is-deprecated,.html)

## Related error messages
+ [PHP RFC: Deprecate functions with overloaded signatures](https://wiki.php.net/rfc/deprecate_functions_with_overloaded_signatures)
+ [stream_context_set_options()](https://www.php.net/manual/en/function.stream-context-set-options.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()