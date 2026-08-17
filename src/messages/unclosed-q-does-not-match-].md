# Unclosed \'(\' does not match \']\'

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unclosed-q-does-not-match-].html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unclosed-q-does-not-match-].html","name":"Unclosed \\'(\\' does not match \\']\\'","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-02-04T18:52:08+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"This is a variation of the unbalanced parenthesis or square brackets","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unclosed-q-does-not-match-].html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This is a variation of the unbalanced parenthesis or square brackets. Here, the parenthesis were not closed before the nesting square brackets was closed.

## Example

```php
<?php

$array[foo(1,2]; 

?>
```

## Alternatives
+ Close the parenthesis before closing the square bracket.

## Related error messages
+ [unmatched-']'](unmatched-\].html)
+ [unmatched-'}'](unmatched-}.html)
+ [unmatched-')'](unmatched-\).html)
