# Object not initialized

## Description
This error appears with `intl` and `spl` extensions. It happens when an object was not fully initialized with the extension: it was only extended and the parent constructor was omitted. This leaves the custom object valid, but not finalized from the parent point of view.

This error may also happen when the object keeps being used, after an `unset()` call, or `__destructor` call.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/object-not-initialized.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/object-not-initialized.html","name":"Object not initialized","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"This error appears with ``intl`` and ``spl`` extensions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/object-not-initialized.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class MyDirectoryIterator extends DirectoryIterator {
    public function __construct() {}
}

$it = new MyDirectoryIterator;
try {
    $it->key();
} catch (Error $e) {
    echo $e->getMessage(), \n;
}

?>
```

## Alternatives
+ Call ``parent::__construct`` in the custom constructor.
+ Remove any call to the object after destruction.

## Related error messages
+ [typed-property-%s::$%s-must-not-be-accessed-before-initialization](typed-property-%s::$%s-must-not-be-accessed-before-initialization.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()