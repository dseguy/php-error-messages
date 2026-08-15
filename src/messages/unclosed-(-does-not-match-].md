# Unclosed \'(\' does not match \']\'

## Description
This is a variation of the unbalanced parenthesis or square brackets. Here, the parenthesis were not closed before the nesting square brackets was closed.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unclosed-'('-does-not-match-']'.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unclosed-'('-does-not-match-']'.html","name":"Unclosed \\'(\\' does not match \\']\\'","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"This is a variation of the unbalanced parenthesis or square brackets","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unclosed-'('-does-not-match-']'.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

$array[foo(1,2]; 

?>
```

## Alternatives
+ Close the parenthesis before closing the square bracket.

## Related error messages
+ [unmatched-']'](asdf)
+ [unmatched-'}'](asdf)
+ [unmatched-')'](asdf)
