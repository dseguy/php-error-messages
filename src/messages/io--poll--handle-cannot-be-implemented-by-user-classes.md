# Io\\Poll\\Handle cannot be implemented by user classes

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/io--poll--handle-cannot-be-implemented-by-user-classes.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/io--poll--handle-cannot-be-implemented-by-user-classes.html","name":"Io\\\\Poll\\\\Handle cannot be implemented by user classes","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-04T14:35:33+00:00","dateModified":"2026-09-04T14:35:33+00:00","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/io--poll--handle-cannot-be-implemented-by-user-classes.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP 8.6 introduces a native Polling API (`Io\Poll`) for waiting on readiness of multiple I/O resources at once, backed by `epoll` or `kqueue` at the system level. `Io\Poll\Handle` is the marker interface that identifies a resource as pollable; it declares no methods of its own.

Every concrete handle type must register a low-level `php_poll_handle_ops` operations table that tells the polling backend how to obtain the underlying file descriptor and check the handle's validity. Userland classes have no way to provide that table, so implementing `Io\Poll\Handle` directly from PHP code is rejected with a fatal error at class-declaration time, rather than producing a handle that would silently fail to work with the poller.

## Example

```php
<?php

class MyHandle implements Io\Poll\Handle {
}

?>
```

## Literal Examples
+ Io\Poll\Handle cannot be implemented by user classes

## Alternatives
+ Use one of the internal classes that already implement Io\Poll\Handle (such as a stream or socket resource wrapper), instead of implementing the interface yourself.
+ Wrap or compose an existing pollable resource rather than trying to make an arbitrary object pollable.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()