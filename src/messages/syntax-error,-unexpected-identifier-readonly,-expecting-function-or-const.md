# syntax error, unexpected identifier "readonly", expecting "function" or "const"

## Description
This syntax error signals that `readonly` is still considered as an identifier, and not as a keyword. This happens when the underlying PHP version is too old for the source code.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-identifier-\"readonly\",-expecting-\"function\"-or-\"const\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-identifier-\"readonly\",-expecting-\"function\"-or-\"const\".html","name":"syntax error, unexpected identifier \"readonly\", expecting \"function\" or \"const\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"This syntax error signals that ``readonly`` is still considered as an identifier, and not as a keyword","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-identifier-\"readonly\",-expecting-\"function\"-or-\"const\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
    readonly int $property;
}

?>
```

## Alternatives
+ Remove the ``readonly`` option.
+ Upgrade to PHP 8.1 or more recent.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()