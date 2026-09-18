# must be of type string when argument #3 ($option) is TCP_FUNCTION_BLK, %s given

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-of-type-string-when-argument-s3-q$optionr-is-tcp_function_blk,-ps-given.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-of-type-string-when-argument-s3-q$optionr-is-tcp_function_blk,-ps-given.html","name":"must be of type string when argument #3 ($option) is TCP_FUNCTION_BLK, %s given","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-18T17:17:41+00:00","dateModified":"2026-09-18T17:17:41+00:00","description":"``TCP_FUNCTION_BLK`` (FreeBSD only) selects the pluggable TCP stack to use for a connection, identified by its name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-of-type-string-when-argument-s3-q$optionr-is-tcp_function_blk,-ps-given.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`TCP_FUNCTION_BLK` (FreeBSD only) selects the pluggable TCP stack to use for a connection, identified by its name. `socket_set_option()` requires `$value` (argument #4) to be a string for this option; any other type, such as the integer above, is rejected. The string must also be free of null bytes and shorter than the platform's `TCP_FUNCTION_NAME_LEN_MAX`, which are reported as separate `ValueError` cases.

## Example

```php
<?php

$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

socket_set_option($socket, IPPROTO_TCP, TCP_FUNCTION_BLK, 123);

?>
```

## Literal Examples
+ socket_set_option(): Argument #4 ($value) must be of type string when argument #3 ($option) is TCP_FUNCTION_BLK, int given

## Alternatives
+ Pass the TCP stack name as a string, without embedded null bytes.
+ List available stacks via ``net.inet.tcp.functions_available`` on FreeBSD.

## Related error messages
+ [must-be-of-type-string-when-argument-#3-($option)-is-tcp_congestion,-%s-given](must-be-of-type-string-when-argument-#3-\($option\)-is-tcp\_congestion,-%s-given.html)

In previous PHP versions, this error message used to be :ref:`must-be-of-type-string-when-argument-#3-($option)-is-tcp_congestion,-%s-given`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()