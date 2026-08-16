# Increment on non-numeric string is deprecated, use str_increment() instead

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/increment-on-non-numeric-string-is-deprecated,-use-str_increment()-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/increment-on-non-numeric-string-is-deprecated,-use-str_increment()-instead.html","name":"Increment on non-numeric string is deprecated, use str_increment() instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/increment-on-non-numeric-string-is-deprecated,-use-str_increment()-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP 8.3 introduced str_increment() and str_decrement(), which update strings by changing the last character's ascii code. It mirrors a famous PHP easter egg, where a string may be incremented with the `++` operator. 

In PHP 8.5, this feature is deprecated, and a warning is emitted. There is no deprecation warning for decrementing, as the feature was not implemented on strings.

## Example

```php
<?php

    $string = 'aa';
    ++$string;

    echo $string;

?>
```

## Alternatives
+ Use str_increment(), instead of ``++`` on string variables.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[incrementNonAlphanumeric](incrementNonAlphanumeric)