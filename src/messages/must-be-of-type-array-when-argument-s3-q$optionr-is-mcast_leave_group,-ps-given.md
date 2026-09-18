# must be of type array when argument #3 ($option) is MCAST_LEAVE_GROUP, %s given

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-of-type-array-when-argument-s3-q$optionr-is-mcast_leave_group,-ps-given.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-of-type-array-when-argument-s3-q$optionr-is-mcast_leave_group,-ps-given.html","name":"must be of type array when argument #3 ($option) is MCAST_LEAVE_GROUP, %s given","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-18T17:17:11+00:00","dateModified":"2026-09-18T17:17:11+00:00","description":"When ``$option`` is ``MCAST_LEAVE_GROUP``, ``socket_set_option()`` expects ``$value`` (argument #4) to be an array (or an object, read as a property bag) describing the group to leave \u2014 with keys such as ``group`` and ``interface``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-of-type-array-when-argument-s3-q$optionr-is-mcast_leave_group,-ps-given.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
When `$option` is `MCAST_LEAVE_GROUP`, `socket_set_option()` expects `$value` (argument #4) to be an array (or an object, read as a property bag) describing the group to leave — with keys such as `group` and `interface`. Passing anything else, such as the plain string above, is rejected before the request ever reaches the underlying `setsockopt()` call.

## Example

```php
<?php

$socket = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);

socket_set_option($socket, IPPROTO_IP, MCAST_LEAVE_GROUP, 'not-an-array');

?>
```

## Literal Examples
+ socket_set_option(): Argument #4 ($value) must be of type array when argument #3 ($option) is MCAST_LEAVE_GROUP, string given

## Alternatives
+ Pass an array with the ``group`` (and, where applicable, ``interface``) keys expected for MCAST_LEAVE_GROUP.
+ Consult the socket_set_option() documentation for the exact shape expected for this option.

## Related error messages
+ [must-be-of-type-array-when-argument-#3-($option)-is-mcast_leave_source_group,-%s-given](must-be-of-type-array-when-argument-#3-\($option\)-is-mcast\_leave\_source\_group,-%s-given.html)

In more recent PHP versions, this error message is now :ref:`must-be-of-type-array-when-argument-#3-($option)-is-mcast_leave_source_group,-%s-given`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()