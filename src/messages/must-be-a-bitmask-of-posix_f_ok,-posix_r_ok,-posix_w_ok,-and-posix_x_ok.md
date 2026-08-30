# must be a bitmask of POSIX_F_OK, POSIX_R_OK, POSIX_W_OK, and POSIX_X_OK

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-bitmask-of-posix_f_ok,-posix_r_ok,-posix_w_ok,-and-posix_x_ok.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-bitmask-of-posix_f_ok,-posix_r_ok,-posix_w_ok,-and-posix_x_ok.html","name":"must be a bitmask of POSIX_F_OK, POSIX_R_OK, POSIX_W_OK, and POSIX_X_OK","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-26T09:15:22+00:00","dateModified":"2026-08-26T09:15:22+00:00","description":"``posix_access()`` checks whether the current process can access a file in a given way","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-bitmask-of-posix_f_ok,-posix_r_ok,-posix_w_ok,-and-posix_x_ok.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`posix_access()` checks whether the current process can access a file in a given way. Its `$flags` argument only accepts a bitmask built from `POSIX_F_OK` (existence), `POSIX_R_OK` (readable), `POSIX_W_OK` (writable), and `POSIX_X_OK` (executable).

As of PHP 8.6, passing a value with bits set outside of that set throws a `ValueError`, instead of forwarding an unvalidated flag value straight to the underlying `access()` system call.

## Example

```php
<?php

posix_access('/etc/passwd', 999);

?>
```

## Literal Examples
+ posix_access(): Argument #2 ($flags) must be a bitmask of POSIX_F_OK, POSIX_R_OK, POSIX_W_OK, and POSIX_X_OK

## Alternatives
+ Build ``$flags`` for ``posix_access()`` only out of ``POSIX_F_OK``, ``POSIX_R_OK``, ``POSIX_W_OK``, and ``POSIX_X_OK``, combined with ``|`` as needed.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[Previously, an out-of-range $flags value was passed through to the underlying access() call unchecked instead of being rejected.](Previously, an out-of-range $flags value was passed through to the underlying access() call unchecked instead of being rejected.)