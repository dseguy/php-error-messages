# Unclosed \'(\' on line %s does not match \']\'

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unclosed-'('-on-line-%s-does-not-match-']'.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unclosed-'('-on-line-%s-does-not-match-']'.html","name":"Unclosed \\'(\\' on line %s does not match \\']\\'","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"PHP keeps track of parenthesiss and square brackets","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unclosed-'('-on-line-%s-does-not-match-']'.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP keeps track of parenthesiss and square brackets. Any of them that is opened, must be closed by the corresponding one. In the current situation, an open parenthesiss is followed by a closing square bracket, which does not match.

## Example

```php
<?php

$array = [foo(1, 2];

?>
```

## Literal Examples
+ Unclosed '(' on line 17 does not match ']'

## Alternatives
+ Close the parenthesis before the closing square bracket.
+ Open a square bracket after the opening parenthesis.
