# Failed to set memory_limit to %zd bytes. Setting to max_memory_limit instead (currently: %zd bytes)

## Description
PHP 8.5 introduced the `max_memory_limit` INI directive, an administrator-controlled ceiling on how high `memory_limit` may be raised, whether from `php.ini`, the command line, or a runtime call to `ini_set()`. Any attempt, from any of these sources, to set `memory_limit` above `max_memory_limit` triggers this warning, and the effective limit is clamped down to `max_memory_limit` instead.

`max_memory_limit` defaults to `-1` (no ceiling), so it must be configured first, and it is a `PHP_INI_SYSTEM` directive: it can only be set in `php.ini` or on the command line, never with `ini_set()`.

To reproduce this message on the command line: `php -d max_memory_limit=64M script.php`, where `script.php` is the code above.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/failed-to-set-memory_limit-to-%zd-bytes.-setting-to-max_memory_limit-instead-(currently:.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/failed-to-set-memory_limit-to-%zd-bytes.-setting-to-max_memory_limit-instead-(currently:.html","name":"Failed to set memory_limit to %zd bytes. Setting to max_memory_limit instead (currently: %zd bytes)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 08:12:55 +0000","dateModified":"Wed, 15 Jul 2026 08:12:55 +0000","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/failed-to-set-memory_limit-to-%zd-bytes.-setting-to-max_memory_limit-instead-(currently:.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

ini_set('memory_limit', '128M');
echo ini_get('memory_limit'), "\n";

?>
```

## Alternatives
+ Lower the requested ``memory_limit`` to a value at or below ``max_memory_limit``.
+ Raise ``max_memory_limit`` in php.ini if the script genuinely needs more memory.
+ Do not treat the return value of ``ini_set('memory_limit', ...)`` as authoritative; re-read it with ``ini_get('memory_limit')`` afterwards.

## Related error messages
+ [max_memory_limit](https://www.php.net/manual/en/ini.core.php#ini.max-memory-limit)
+ [memory_limit](https://www.php.net/manual/en/ini.core.php#ini.memory-limit)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[max_memory_limit](max_memory_limit)