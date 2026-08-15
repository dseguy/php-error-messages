# The behavior of unparenthesized expressions containing both '.' and '<<'/'>>' will change in PHP 8: '<<'/'>>' will take a higher precedence

## Description
`<<`/`>>` and `.` operators used to have the same priority. This meant that expressions which mixed them would see them executed from left to right. This was confusing, so PHP 8.0 has made the addition the highest priority, closer to human way of reading the code.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-behavior-of-unparenthesized-expressions-containing-both-'.'-and-'<<'-'>>'-will-change-in-php-8:-'<<'-'>>'-will-take-a-higher-precedence.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-behavior-of-unparenthesized-expressions-containing-both-'.'-and-'<<'-'>>'-will-change-in-php-8:-'<<'-'>>'-will-take-a-higher-precedence.html","name":"The behavior of unparenthesized expressions containing both '.' and '<<'\/'>>' will change in PHP 8: '<<'\/'>>' will take a higher precedence","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"``<<``\/``>>`` and ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-behavior-of-unparenthesized-expressions-containing-both-'.'-and-'<<'-'>>'-will-change-in-php-8:-'<<'-'>>'-will-take-a-higher-precedence.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

$b = 2;
$a = 'a '. $b >> 1;

?>
```

## Alternatives
+ Add parenthesis to make the code less ambiguous.

## Related error messages
+ [the-behavior-of-unparenthesized-expressions-containing-both-'.'-and-'+'-'-'-will-change-in-php-8:-'+'-'-'-will-take-a-higher-precedence](the-behavior-of-unparenthesized-expressions-containing-both-.-and-+---will-change-in-php-8:-+---will-take-a-higher-precedence.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[dotAndBitshift](dotAndBitshift)