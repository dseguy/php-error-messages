# Passing null is deprecated, instead the last opened directory stream should be provided

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-null-is-deprecated,-instead-the-last-opened-directory-stream-should-be-provided.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-null-is-deprecated,-instead-the-last-opened-directory-stream-should-be-provided.html","name":"Passing null is deprecated, instead the last opened directory stream should be provided","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-11-23T22:22:32+01:00","dateModified":"2025-11-23T22:22:32+01:00","description":"When calling ``dir()`` twice, it was possible to use ``null`` the second time to open the same directory","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-null-is-deprecated,-instead-the-last-opened-directory-stream-should-be-provided.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
When calling `dir()` twice, it was possible to use `null` the second time to open the same directory. Since PHP 8.1, it is not possible anymore, and the actual name of the directory must be provided.

## Example

```php
<?php

dir('/tmp'); // opens /tmp

dir(null); // opens /tmp

?>
```

## Alternatives
+ Always use the name of the directory when calling ``dir()``.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()