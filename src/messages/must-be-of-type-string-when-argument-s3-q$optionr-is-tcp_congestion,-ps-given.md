# must be of type string when argument #3 ($option) is TCP_CONGESTION, %s given

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-of-type-string-when-argument-s3-q$optionr-is-tcp_congestion,-ps-given.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-of-type-string-when-argument-s3-q$optionr-is-tcp_congestion,-ps-given.html","name":"must be of type string when argument #3 ($option) is TCP_CONGESTION, %s given","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-18T17:17:36+00:00","dateModified":"2026-09-18T17:17:36+00:00","description":"``TCP_CONGESTION`` selects the congestion-control algorithm for a TCP socket, by name, e","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-of-type-string-when-argument-s3-q$optionr-is-tcp_congestion,-ps-given.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`TCP_CONGESTION` selects the congestion-control algorithm for a TCP socket, by name, e.g. `"cubic"` or `"bbr"`. `socket_set_option()` requires `$value` (argument #4) to be a string for this option; any other type, such as the integer above, is rejected.

## Example

```php
<?php

$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

socket_set_option($socket, IPPROTO_TCP, TCP_CONGESTION, 123);

?>
```

## Literal Examples
+ socket_set_option(): Argument #4 ($value) must be of type string when argument #3 ($option) is TCP_CONGESTION, int given

## Alternatives
+ Pass the congestion-control algorithm name as a string.
+ List available algorithms via ``/proc/sys/net/ipv4/tcp_available_congestion_control`` on Linux.

## Related error messages
+ [must-be-of-type-string-when-argument-#3-($option)-is-so_bindtodevice,-%s-given](must-be-of-type-string-when-argument-#3-\($option\)-is-so\_bindtodevice,-%s-given.html)
+ [must-be-of-type-string-when-argument-#3-($option)-is-tcp_function_blk,-%s-given](must-be-of-type-string-when-argument-#3-\($option\)-is-tcp\_function\_blk,-%s-given.html)

In previous PHP versions, this error message used to be :ref:`must-be-of-type-string-when-argument-#3-($option)-is-so_bindtodevice,-%s-given`.
In more recent PHP versions, this error message is now :ref:`must-be-of-type-string-when-argument-#3-($option)-is-tcp_function_blk,-%s-given`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()