# must be of type string when argument #3 ($option) is SO_BINDTODEVICE, %s given

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-of-type-string-when-argument-s3-q$optionr-is-so_bindtodevice,-ps-given.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-of-type-string-when-argument-s3-q$optionr-is-so_bindtodevice,-ps-given.html","name":"must be of type string when argument #3 ($option) is SO_BINDTODEVICE, %s given","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-18T17:17:31+00:00","dateModified":"2026-09-18T17:17:31+00:00","description":"``SO_BINDTODEVICE`` (Linux) binds a socket to a specific network interface, identified by its name, e","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-of-type-string-when-argument-s3-q$optionr-is-so_bindtodevice,-ps-given.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`SO_BINDTODEVICE` (Linux) binds a socket to a specific network interface, identified by its name, e.g. `"eth0"`. `socket_set_option()` requires `$value` (argument #4) to be a string for this option; any other type, such as the integer above, is rejected.

## Example

```php
<?php

$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

socket_set_option($socket, SOL_SOCKET, SO_BINDTODEVICE, 123);

?>
```

## Literal Examples
+ socket_set_option(): Argument #4 ($value) must be of type string when argument #3 ($option) is SO_BINDTODEVICE, int given

## Alternatives
+ Pass the network interface name as a string.
+ Use php_uname() or /sys/class/net to discover the correct interface name if unsure.

## Related error messages
+ [must-be-of-type-string-when-argument-#3-($option)-is-so_acceptfilter,-%s-given](must-be-of-type-string-when-argument-#3-\($option\)-is-so\_acceptfilter,-%s-given.html)
+ [must-be-of-type-string-when-argument-#3-($option)-is-tcp_congestion,-%s-given](must-be-of-type-string-when-argument-#3-\($option\)-is-tcp\_congestion,-%s-given.html)

In previous PHP versions, this error message used to be :ref:`must-be-of-type-string-when-argument-#3-($option)-is-so_acceptfilter,-%s-given`.
In more recent PHP versions, this error message is now :ref:`must-be-of-type-string-when-argument-#3-($option)-is-tcp_congestion,-%s-given`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()