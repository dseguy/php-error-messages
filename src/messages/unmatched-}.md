# Unmatched '}'

## Description
PHP has encountered a closing curly brackets, but has no related opening curly bracket. 

In more complex situations, there might be opening and closing brackets: this error reports that there are more closing ones than opening. Eventually, some will not have a matching bracket.

Inside double-quoted strings, the unmatched closing brackets are ignored, and used as literal value.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unmatched-'}'.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unmatched-'}'.html","name":"Unmatched '}'","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"PHP has encountered a closing curly brackets, but has no related opening curly bracket","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unmatched-'}'.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

$a = 1 + 2}

// 3 opening, 4 closing. 
{{{$b = 1 + 2}}}}

// this unmatched closing bracket is taken as literal
$b = "$a} = 1+2"; 

?>
```

## Alternatives
+ Remove the closing curly bracket.
+ Add an opening closing curly bracket.

## Related error messages
+ [unclosed-'{'](asdf)
+ [unmatched-']'](asdf)
+ [unmatched-')'](asdf)
+ [unclosed-'('-does-not-match-']'](asdf)
+ [syntax-error,-unexpected-string-content](asdf)
