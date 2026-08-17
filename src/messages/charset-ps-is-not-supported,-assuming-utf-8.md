# Charset "%s" is not supported, assuming UTF-8

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/charset-ps-is-not-supported,-assuming-utf-8.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/charset-ps-is-not-supported,-assuming-utf-8.html","name":"Charset \"%s\" is not supported, assuming UTF-8","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:46+00:00","dateModified":"2026-03-31T09:10:46+00:00","description":"The provided character set, third argument, is not valid","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/charset-ps-is-not-supported,-assuming-utf-8.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The provided character set, third argument, is not valid.

## Example

```php
<?php

    htmlentities($a, $b, 'xxx');

?>
```

## Literal Examples
+ Charset "xxx" is not supported, assuming UTF-8

## Alternatives
+ Use a valid character set.
+ Check for typos, or empty values.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()