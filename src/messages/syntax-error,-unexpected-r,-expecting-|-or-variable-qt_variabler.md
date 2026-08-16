# syntax error, unexpected ')', expecting '|' or variable (T_VARIABLE)

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-')',-expecting-'|'-or-variable-(t_variable).html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-')',-expecting-'|'-or-variable-(t_variable).html","name":"syntax error, unexpected ')', expecting '|' or variable (T_VARIABLE)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-12-18T23:13:01+01:00","dateModified":"2025-02-16T07:23:20-05:00","description":"Until PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-')',-expecting-'|'-or-variable-(t_variable).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Until PHP 8.0, exceptions always had to be named, with a variable. 

Here, the error message is signaling that it expected another exception to catch, separated from the first one by a `|`, or a variable name.

## Example

```php
<?php

try {
    
} catch (E) {}

?>
```

## Alternatives
+ Add a variable name to the catch clause.
+ Add another exception to catch, and then a name to the catch clause.
+ Upgrade to PHP 8.0 or more recent.
