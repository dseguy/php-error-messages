# syntax error, unexpected identifier "%s", expecting "," or ";"

## Description
This error is not related to the upcoming identifier, but to the previous delimiters. In both cases of the illustration, a string was started, with single or double quotes: yet, inside these strings, there was another set of the same delimiter. The parser could not differentiate between the two usages, and exited the string.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-identifier-\"%s\",-expecting-\",\"-or-\";\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-identifier-\"%s\",-expecting-\",\"-or-\";\".html","name":"syntax error, unexpected identifier \"%s\", expecting \",\" or \";\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"This error is not related to the upcoming identifier, but to the previous delimiters","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-identifier-\"%s\",-expecting-\",\"-or-\";\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

// missing a '
echo '<a href='https://www.exakat.io'>Exakat.io</a>';

// missing a " 
echo "<a href="https://www.exakat.io">Exakat.io</a>";

// missing as between identifier
use OpenApi\Attributesas OA;

?>
```

## Alternatives
+ Escape quotes inside a string, when they are used as delimiter.
+ Use the other quotes inside the string: if single quotes are used as delimiters, use double quotes in it.
+ Switch to the heredoc syntax, to simplify the syntax for both quotes.
+ Add the missing ``as``, between the two identifiers, in a ``use`` instruction.
