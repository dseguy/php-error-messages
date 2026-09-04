# must be a combination of MSG_OOB, MSG_PEEK, MSG_WAITALL, MSG_DONTWAIT, MSG_ERRQUEUE, and MSG_CMSG_CLOEXEC for AF_PACKET sockets

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-combination-of-msg_oob,-msg_peek,-msg_waitall,-msg_dontwait,-msg_errqueue,-and-msg_cmsg_cloexec-for-af_packet-sockets.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-combination-of-msg_oob,-msg_peek,-msg_waitall,-msg_dontwait,-msg_errqueue,-and-msg_cmsg_cloexec-for-af_packet-sockets.html","name":"must be a combination of MSG_OOB, MSG_PEEK, MSG_WAITALL, MSG_DONTWAIT, MSG_ERRQUEUE, and MSG_CMSG_CLOEXEC for AF_PACKET sockets","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-30T11:59:47+02:00","dateModified":"2026-08-30T11:59:47+02:00","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-combination-of-msg_oob,-msg_peek,-msg_waitall,-msg_dontwait,-msg_errqueue,-and-msg_cmsg_cloexec-for-af_packet-sockets.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP 8.6 adds raw `AF_PACKET` support to `socket_recvfrom()`. On a packet socket, only a finite subset of `MSG_*` flags is safe to use for receiving: `MSG_OOB`, `MSG_PEEK`, `MSG_WAITALL`, `MSG_DONTWAIT`, `MSG_ERRQUEUE`, and `MSG_CMSG_CLOEXEC`. Notably, `MSG_TRUNC` is excluded, since on a packet socket it makes `recvfrom()` report the untruncated frame length, which can exceed the supplied buffer.

Passing any flag outside this set on an `AF_PACKET` socket throws a `ValueError`, instead of risking a buffer-size mismatch.

## Example

```php
<?php

$socket = socket_create(AF_PACKET, SOCK_RAW, 0);

socket_recvfrom($socket, $data, 2048, MSG_TRUNC, $address, $port);

?>
```

## Literal Examples
+ socket_recvfrom(): Argument #4 ($flags) must be a combination of MSG_OOB, MSG_PEEK, MSG_WAITALL, MSG_DONTWAIT, MSG_ERRQUEUE, and MSG_CMSG_CLOEXEC for AF_PACKET sockets

## Alternatives
+ When calling ``socket_recvfrom()`` on an AF_PACKET socket, only combine flags from MSG_OOB, MSG_PEEK, MSG_WAITALL, MSG_DONTWAIT, MSG_ERRQUEUE, and MSG_CMSG_CLOEXEC.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()