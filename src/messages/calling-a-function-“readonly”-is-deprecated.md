# Calling a function “readonly” is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-a-function-\u201creadonly\u201d-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-a-function-\u201creadonly\u201d-is-deprecated.html","name":"Calling a function \u201creadonly\u201d is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-04T14:35:08+00:00","dateModified":"2026-09-04T14:35:08+00:00","description":"``readonly`` has been a semi-reserved word since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-a-function-\u201creadonly\u201d-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`readonly` has been a semi-reserved word since PHP 8.1, when it was introduced as a modifier for readonly properties and classes. It could still be used as the name of a function, class, or constant, and PHP even special-cased a global function literally called `readonly()` so that WordPress, which ships one, would keep working.

PHP 8.6 deprecates calling such a function, as part of a broader effort to fully reserve `readonly` for the language. The deprecation notice is emitted every time the function is called, not when it is declared.

## Example

```php
<?php

function readonly() {
    return 'not a property modifier';
}

echo readonly();

?>
```

## Literal Examples
+ Calling a function "readonly" is deprecated

## Alternatives
+ Rename the function to something that is not ``readonly``, e.g. ``readonlyValue()`` or ``getReadonly()``.

## Related error messages
+ [cannot-use-'readonly'-as-%s-modifier](cannot-use-readonly-as-%s-modifier.html)
+ [syntax-error,-unexpected-identifier-"readonly",-expecting-"function"-or-"const"](syntax-error,-unexpected-identifier-readonly,-expecting-function-or-const.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[Previously, a global function literally named readonly() could be declared and called without any warning, as a compatibility carve-out for WordPress. As of PHP 8.6, calling it emits a deprecation notice, in preparation for readonly becoming a fully reserved word.](Previously, a global function literally named readonly() could be declared and called without any warning, as a compatibility carve-out for WordPress. As of PHP 8.6, calling it emits a deprecation notice, in preparation for readonly becoming a fully reserved word.)