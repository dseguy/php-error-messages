# Unserializing the 'S' format is deprecated

## Description
When using the `unserialize()` function, the string should not use `S` (upper case S) to format a string. It should only use `s` (lower case S).

Other formats, such as `i`, `b` or `N` are already case sensitive.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unserializing-the-'s'-format-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unserializing-the-'s'-format-is-deprecated.html","name":"Unserializing the 'S' format is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"When using the ``unserialize()`` function, the string should not use ``S`` (upper case S) to format a string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unserializing-the-'s'-format-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

$encoded = 'S:3:"abc";';

unserialize($encoded);

?>
```

## Alternatives
+ Turn the ``S`` into lower case ``s``. This might be tricky.
+ Serialize all over the stored strings with lower case.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[unserialize_S](unserialize_S)