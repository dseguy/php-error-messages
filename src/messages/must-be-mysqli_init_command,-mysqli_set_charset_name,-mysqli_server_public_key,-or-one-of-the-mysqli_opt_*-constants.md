# must be MYSQLI_INIT_COMMAND, MYSQLI_SET_CHARSET_NAME, MYSQLI_SERVER_PUBLIC_KEY, or one of the MYSQLI_OPT_* constants

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-mysqli_init_command,-mysqli_set_charset_name,-mysqli_server_public_key,-or-one-of-the-mysqli_opt_*-constants.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-mysqli_init_command,-mysqli_set_charset_name,-mysqli_server_public_key,-or-one-of-the-mysqli_opt_*-constants.html","name":"must be MYSQLI_INIT_COMMAND, MYSQLI_SET_CHARSET_NAME, MYSQLI_SERVER_PUBLIC_KEY, or one of the MYSQLI_OPT_* constants","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-24T15:48:00+02:00","dateModified":"2026-08-24T15:48:00+02:00","description":"``mysqli_options()`` (and ``mysqli::options()``) only understand a fixed set of option constants: ``MYSQLI_INIT_COMMAND``, ``MYSQLI_SET_CHARSET_NAME``, ``MYSQLI_SERVER_PUBLIC_KEY``, and the various ``MYSQLI_OPT_*`` constants","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-mysqli_init_command,-mysqli_set_charset_name,-mysqli_server_public_key,-or-one-of-the-mysqli_opt_*-constants.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`mysqli_options()` (and `mysqli::options()`) only understand a fixed set of option constants: `MYSQLI_INIT_COMMAND`, `MYSQLI_SET_CHARSET_NAME`, `MYSQLI_SERVER_PUBLIC_KEY`, and the various `MYSQLI_OPT_*` constants. Each of these expects a specific value type (string, bool or int), which the function needs to know in order to validate and forward the value correctly.

Before PHP 8.6, passing an option value that `mysqli_options()` did not recognize was silently ignored: the call returned `false` without telling the caller why. As of PHP 8.6, an unrecognized option now throws a `ValueError` instead.

## Example

```php
<?php

$mysqli = mysqli_init();

mysqli_options($mysqli, 999999, true);

?>
```

## Literal Examples
+ mysqli_options(): Argument #2 ($option) must be MYSQLI_INIT_COMMAND, MYSQLI_SET_CHARSET_NAME, MYSQLI_SERVER_PUBLIC_KEY, or one of the MYSQLI_OPT_* constants

## Alternatives
+ Pass one of the documented ``MYSQLI_INIT_COMMAND``, ``MYSQLI_SET_CHARSET_NAME``, ``MYSQLI_SERVER_PUBLIC_KEY`` or ``MYSQLI_OPT_*`` constants as the option argument.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()