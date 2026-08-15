# syntax error, unexpected token "{", expecting "," or ";"

## Description
PHP 8.4 introduced property hooks, which allow defining getters and setters for properties directly in the property definition. Previous PHP versions did not support that syntax, and yield this error.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"{\",-expecting-\",\"-or-\";\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"{\",-expecting-\",\"-or-\";\".html","name":"syntax error, unexpected token \"{\", expecting \",\" or \";\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"{\",-expecting-\",\"-or-\";\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class A {
    public $prop {
        get { return A; }
        set { echo __METHOD__, \n; }
    }
}

?>
```

## Alternatives
+ Upgrade to PHP 8.4.
+ Remove the property hooks.
+ Move the property hooks to a method.
+ Move the property hooks to a magic method.
