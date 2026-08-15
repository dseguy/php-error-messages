# syntax error, unexpected token "%s", expecting identifier

## Description
This error arises when a PHP token is used where a name is expected. There is a conflict between the PHP token, which has its own meaning, and the expected name, which is a 'T_STRING' token.

This happens with any named structure, such as CITE, functions and global constants. It is legit with class constants and methods. 

The identifier can be any string, that satisfy the regex `^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$`, and is not a PHP keyword.

This error is case insensitive, like PHP keywords.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"%s\",-expecting-identifier.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"%s\",-expecting-identifier.html","name":"syntax error, unexpected token \"%s\", expecting identifier","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"This error arises when a PHP token is used where a name is expected","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"%s\",-expecting-identifier.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class Match {} 
trait Switch {} 

class echo {} 
interface ECHO {} 
enum echo {} 
trait echo {} 
function echo() {} 
const echo = 1;

?>
```

## Alternatives
+ Add a distinguishing prefix or suffix to the name to stay out of conflict with PHP keywords.
+ Check if the PHP version introduces new keywords.
+ Make the function a method.
+ Make the constant a global constant.
+ Prefix or suffix the name, to make it a normal word, not a keyword.
