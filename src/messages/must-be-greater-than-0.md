# must be greater than 0

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-greater-than-0.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-greater-than-0.html","name":"must be greater than 0","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-01-04T22:42:21+01:00","dateModified":"2026-01-04T22:42:21+01:00","description":"This error is reported when a parameter is expected to be an integer, strictly positive","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-greater-than-0.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error is reported when a parameter is expected to be an integer, strictly positive. This is the case with the second argument of str_split().

## Example

```php
<?php
  str_split('abc', 0);
?>
```

## Literal Examples
+ str_split(): Argument #2 ($length) must be greater than 0

## Alternatives
+ Use a valid value for the parameter: a positive and non zero integer, for example 1, 2, 3...

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()