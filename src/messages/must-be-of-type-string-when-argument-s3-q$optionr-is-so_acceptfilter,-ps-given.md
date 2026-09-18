# must be of type string when argument #3 ($option) is SO_ACCEPTFILTER, %s given

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-of-type-string-when-argument-s3-q$optionr-is-so_acceptfilter,-ps-given.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-of-type-string-when-argument-s3-q$optionr-is-so_acceptfilter,-ps-given.html","name":"must be of type string when argument #3 ($option) is SO_ACCEPTFILTER, %s given","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-18T17:17:26+00:00","dateModified":"2026-09-18T17:17:26+00:00","description":"``SO_ACCEPTFILTER`` (available on BSD-derived systems such as FreeBSD) names an accept filter by a short string, e","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-of-type-string-when-argument-s3-q$optionr-is-so_acceptfilter,-ps-given.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`SO_ACCEPTFILTER` (available on BSD-derived systems such as FreeBSD) names an accept filter by a short string, e.g. `"dataready"`. `socket_set_option()` requires `$value` (argument #4) to be a string for this option; any other type, such as the integer above, is rejected. Note that the string must also be shorter than the platform's internal filter-name buffer and must not contain a null byte, which are reported as separate `ValueError` cases.

## Example

```php
<?php

$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

socket_set_option($socket, SOL_SOCKET, SO_ACCEPTFILTER, 123);

?>
```

## Literal Examples
+ socket_set_option(): Argument #4 ($value) must be of type string when argument #3 ($option) is SO_ACCEPTFILTER, int given

## Alternatives
+ Pass the accept filter name as a short string, without embedded null bytes.
+ Consult your platform's accf(9)/setsockopt(2) documentation for valid filter names.

## Related error messages
+ [must-be-of-type-string-when-argument-#3-($option)-is-so_bindtodevice,-%s-given](must-be-of-type-string-when-argument-#3-\($option\)-is-so\_bindtodevice,-%s-given.html)
+ [must-be-of-type-string-when-argument-#3-($option)-is-fil_attach-or-fil_detach,-%s-given](must-be-of-type-string-when-argument-#3-\($option\)-is-fil\_attach-or-fil\_detach,-%s-given.html)

In more recent PHP versions, this error message is now :ref:`must-be-of-type-string-when-argument-#3-($option)-is-so_bindtodevice,-%s-given`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()