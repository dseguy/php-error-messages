# Directive 'report_memleaks' is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/directive-report_memleaks-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/directive-report_memleaks-is-deprecated.html","name":"Directive 'report_memleaks' is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-15T17:29:36+02:00","dateModified":"2026-08-15T17:29:36+02:00","description":"``report_memleaks`` controls whether the Zend Memory Manager reports memory leaks detected during an unclean shutdown (for example when a fatal error occurs)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/directive-report_memleaks-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`report_memleaks` controls whether the Zend Memory Manager reports memory leaks detected during an unclean shutdown (for example when a fatal error occurs). This diagnostic is only meaningful on debug builds of PHP, since a production, non-debug build does not track individual allocations well enough to produce a useful report.

Because the directive is only relevant to internal debugging builds and not to application code, it is deprecated as of PHP 8.5.0.

## Example

```php
<?php

ini_set('report_memleaks', '0');

?>
```

## Alternatives
+ Remove references to ``report_memleaks`` from ``php.ini`` and from the code; the directive has no practical effect on non-debug builds.
+ Use a dedicated memory profiler (e.g. Valgrind, a debug build of PHP) when investigating memory leaks.
