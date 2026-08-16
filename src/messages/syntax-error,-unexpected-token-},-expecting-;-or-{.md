# syntax error, unexpected token "}", expecting ";" or "{"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"}\",-expecting-\";\"-or-\"{\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"}\",-expecting-\";\"-or-\"{\".html","name":"syntax error, unexpected token \"}\", expecting \";\" or \"{\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"PHP found a closing curly bracket, but did not encounter its opening equivalent","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"}\",-expecting-\";\"-or-\"{\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP found a closing curly bracket, but did not encounter its opening equivalent. Since the problem appears in the signature of a method, there are two suggestions: make the method abstract, with a semi-colon ';', or give the method a full body, with the opening curly bracket.

## Example

```php
<?php

class A
{
    public function __construct() 
    }
}
?>
```

## Alternatives
+ Add an opening curly bracket '{' before the closing one. Possibly, fill the body of the method.
+ Replace the closing curly bracket with a semi colon. The method, and possibly the class, must now be abstract.
