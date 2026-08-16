# Unhandled match case %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unhandled-match-case-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unhandled-match-case-%s.html","name":"Unhandled match case %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"The error is emitted when the ``matching`` value is not found in the list of entry of the expression (here true is not in the list of 1 and 2), and also when the expression doesn't have a default entry","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unhandled-match-case-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The error is emitted when the `matching` value is not found in the list of entry of the expression (here true is not in the list of 1 and 2), and also when the expression doesn't have a default entry. That default entry would act as a catch-all entry, and would process unknown values.

## Example

```php
<?php

match(3) {
    1, 2 => 'foo',
};

?>
```

## Literal Examples
+ Unhandled match case 3

## Alternatives
+ Add the missing entry in the list.
+ Add the missing default in the match.
+ Weed out the value before submitting it to the match().
