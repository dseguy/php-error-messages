# syntax error, unexpected token ";", expecting "," or ")"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\";\",-expecting-\",\"-or-\")\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\";\",-expecting-\",\"-or-\")\".html","name":"syntax error, unexpected token \";\", expecting \",\" or \")\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The ``declare`` instruction was not finished properly","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\";\",-expecting-\",\"-or-\")\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `declare` instruction was not finished properly. `declare` accepts one or more parameter. With one parameter, the instruction must be closed with a closing parenthesis after the value expression; with multiple parameters, the parameters are separated by commas `,`, and the last parameter is followed by a closing parenthesis. 

This error message is dedicated to `declare`, as similar other syntaxes yield distinct error messages.

## Example

```php
<?php

declare(strict_types=1;

?>
```

## Alternatives
+ Add a closing parenthesis between the ``1`` and the semi-colon ``;``.
+ Add a comma after the ``1``, provide another parameter, and close the ``declare`` with a closing parenthesis.

## Related error messages
+ [syntax-error,-unexpected-token-";",-expecting-")"](syntax-error,-unexpected-token-;,-expecting-\).html)
