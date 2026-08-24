# auto_detect_line_endings is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/auto_detect_line_endings-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/auto_detect_line_endings-is-deprecated.html","name":"auto_detect_line_endings is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-24T15:48:00+02:00","dateModified":"2026-08-24T15:48:00+02:00","description":"The ``auto_detect_line_endings`` ini directive tells ``fgets()``, ``file()`` and ``fgetss()`` to look at the first few lines of a file to detect the classic Mac OS (pre-OS X) ``\\r``-only line ending convention, and adjust the line-splitting logic accordingly","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/auto_detect_line_endings-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `auto_detect_line_endings` ini directive tells `fgets()`, `file()` and `fgetss()` to look at the first few lines of a file to detect the classic Mac OS (pre-OS X) `\r`-only line ending convention, and adjust the line-splitting logic accordingly.

Classic Mac OS line endings are essentially extinct, so keeping this detection logic around adds a runtime cost and a behavioral surprise for very little benefit. The directive is deprecated, and setting it to a truthy value now raises a deprecation notice; it will be removed entirely in PHP 9.0.

## Example

```php
<?php

ini_set('auto_detect_line_endings', '1');

$fp = fopen('data.txt', 'r');
$line = fgets($fp);

?>
```

## Alternatives
+ Leave ``auto_detect_line_endings`` at its default (disabled) value.
+ If ``\r``-only line endings must be supported, read the whole file with ``file_get_contents()`` and split it with a regular expression that matches ``\r\n``, ``\r`` or ``\n``, such as ``preg_split('/\r\n|\r|\n/', $contents)``.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()