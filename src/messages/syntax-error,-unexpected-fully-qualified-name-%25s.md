# syntax error, unexpected fully qualified name "%s"

## Description
This error appears when new lines are introduced inside a namespace. This was possible syntax until PHP 8.0, but not anymore.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-fully-qualified-name-\"%s\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-fully-qualified-name-\"%s\".html","name":"syntax error, unexpected fully qualified name \"%s\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"This error appears when new lines are introduced inside a namespace","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-fully-qualified-name-\"%s\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

// constant
    \A 
                           \B 
                           \C
                           ;
                           
?>
```

## Alternatives
+ Remove the new lines and whitespaces from the namespace.
