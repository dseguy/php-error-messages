# Argument #%d must be greater than or equal to 0

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/argument-#%d-must-be-greater-than-or-equal-to-0.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/argument-#%d-must-be-greater-than-or-equal-to-0.html","name":"Argument #%d must be greater than or equal to 0","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"This error is reported when a parameter is expected to be an integer, positive or zero","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/argument-#%d-must-be-greater-than-or-equal-to-0.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error is reported when a parameter is expected to be an integer, positive or zero. This is the case with the second argument of str_repeat().

## Example

```php
<?php
  str_repeat('abc', -1);

    // This is valid, and returns an empty string
  str_repeat('abc', 0);
?>
```

## Literal Examples
+ str_repeat(): Argument #2 ($times) must be greater than or equal to 0

## Alternatives
+ Make sure the second argument is an integer, greater or equal to zero.
+ Use intval() on the value of the second integer.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()