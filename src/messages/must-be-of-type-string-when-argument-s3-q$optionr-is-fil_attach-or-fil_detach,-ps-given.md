# must be of type string when argument #3 ($option) is FIL_ATTACH or FIL_DETACH, %s given

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-of-type-string-when-argument-s3-q$optionr-is-fil_attach-or-fil_detach,-ps-given.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-of-type-string-when-argument-s3-q$optionr-is-fil_attach-or-fil_detach,-ps-given.html","name":"must be of type string when argument #3 ($option) is FIL_ATTACH or FIL_DETACH, %s given","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-18T17:17:21+00:00","dateModified":"2026-09-18T17:17:21+00:00","description":"``FIL_ATTACH`` and ``FIL_DETACH`` (used with the ``SOL_FILTER`` level, on platforms that support BSD accept\/receive filters) name the filter to attach or detach as a string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-of-type-string-when-argument-s3-q$optionr-is-fil_attach-or-fil_detach,-ps-given.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`FIL_ATTACH` and `FIL_DETACH` (used with the `SOL_FILTER` level, on platforms that support BSD accept/receive filters) name the filter to attach or detach as a string. `socket_set_option()` requires `$value` (argument #4) to be a string for these two options; any other type, such as the integer above, is rejected.

## Example

```php
<?php

$socket = socket_create(AF_INET, SOCK_STREAM, SOL_FILTER);

socket_set_option($socket, SOL_FILTER, FIL_ATTACH, 123);

?>
```

## Literal Examples
+ socket_set_option(): Argument #4 ($value) must be of type string when argument #3 ($option) is FIL_ATTACH or FIL_DETACH, int given

## Alternatives
+ Pass the filter name as a string.
+ Consult your platform's setsockopt(2)/SOL_FILTER documentation for valid filter names.

## Related error messages
+ [must-be-of-type-string-when-argument-#3-($option)-is-so_acceptfilter,-%s-given](must-be-of-type-string-when-argument-#3-\($option\)-is-so\_acceptfilter,-%s-given.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()