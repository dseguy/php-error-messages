# syntax error, unexpected fully qualified name "%s", expecting "function"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-fully-qualified-name-ps,-expecting-function.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-fully-qualified-name-ps,-expecting-function.html","name":"syntax error, unexpected fully qualified name \"%s\", expecting \"function\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:46+00:00","dateModified":"2026-03-31T09:10:46+00:00","description":"This error appears when a fully qualified name is used in the body of a class, (or any CITE)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-fully-qualified-name-ps,-expecting-function.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error appears when a fully qualified name is used in the body of a class, (or any CITE).

## Example

```php
<?php

class X {
    \A\B;
}

?>
```

## Alternatives
+ Remove the standalone name.
+ Add the ``use`` keyword before the standalone name, to import a related trait.

## Related error messages
+ [syntax-error,-unexpected-namespaced-name-"%s",-expecting-"function"](syntax-error,-unexpected-namespaced-name-%s,-expecting-function.html)
