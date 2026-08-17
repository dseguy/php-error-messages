# Unmatched ')'

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unmatched-r.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unmatched-r.html","name":"Unmatched ')'","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-01-22T13:06:27+01:00","dateModified":"2025-04-20T10:48:56+02:00","description":"PHP has encountered a closing parenthesis, but has no related opening parenthesis","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unmatched-r.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP has encountered a closing parenthesis, but has no related opening parenthesis.

In more complex situations, there might be opening and closing parenthesis: this error reports that there are more closing ones than opening. Eventually, some will not have a matching bracket.

Inside double-quoted strings, the unmatched closing brackets are ignored, and used as literal value.

## Example

```php
<?php

$a = 1 + 2)

// One too many parenthesis
if (in_array(foo(), array()))) { doSomething(); }

?>
```

## Alternatives
+ Remove the closing curly bracket.
+ Add an opening closing curly bracket.

## Related error messages
+ [unclosed-'('](unclosed-\(.html)
+ [unmatched-'}'](unmatched-}.html)
+ [unmatched-']'](unmatched-\].html)
+ [unclosed-'('-does-not-match-']'](unclosed-\(-does-not-match-\].html)
+ [syntax-error,-unexpected-string-content](syntax-error,-unexpected-string-content.html)
+ [syntax-error,-unexpected-variable-"%s",-expecting-"("](syntax-error,-unexpected-variable-%s,-expecting-\(.html)
