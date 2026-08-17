# Unclosed '('

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unclosed-q.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unclosed-q.html","name":"Unclosed '('","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-01-22T13:06:27+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"The closing parenthesis is missing","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unclosed-q.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The closing parenthesis is missing. 

It might be missing, as in the first two examples; it might also be inside a string, as in the third example: the double quote is not closed, which includes the closing square bracket, and makes it missing.

## Example

```php
<?php

// These should be at the end of a code, without ; not ?>
foo($b, 3
$a = 10 * (2 + 3

// closing parenthesis is in the double quoted string
$b = 'c' . ( "d . $e)

?>
```

## Alternatives
+ Check that the square brackets are balanced.
+ Check that the closing square brackets are not hidden in a string.

## Related error messages
+ [unclosed-'{'](unclosed-{.html)
+ [unclosed-'['](unclosed-\[.html)
+ [unmatched-')'](unmatched-\).html)
+ [unmatched-']'](unmatched-\].html)
