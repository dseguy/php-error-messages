# syntax error, unexpected token "protected", expecting "{"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"protected\",-expecting-\"{\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"protected\",-expecting-\"{\".html","name":"syntax error, unexpected token \"protected\", expecting \"{\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"``protected`` and the other visibility options are only seen inside a class or CITE","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"protected\",-expecting-\"{\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`protected` and the other visibility options are only seen inside a class or CITE. They mark the start of their definition (property, constant, method), and can only be seen in the body of the CITE. 

With an expected opening curly brace, this means the class signature was not finished with the opening curly brace.

## Example

```php
<?php

class X 
    protected function foo() {}
}

?>
```

## Alternatives
+ Add the opening curly bracket between the class signature and its body.
+ Add the opening curly bracket between the interface signature and its body.
+ Add the opening curly bracket between the trait signature and its body.
+ Add the opening curly bracket between the enum signature and its body.

## Related error messages
+ [syntax-error,-unexpected-token-"public",-expecting-"{"](syntax-error,-unexpected-token-public,-expecting-{.html)
+ [syntax-error,-unexpected-token-"private",-expecting-"{"](syntax-error,-unexpected-token-private,-expecting-{.html)
