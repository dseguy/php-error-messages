# Increment on non-alphanumeric string is deprecated

## Description
Incrementing a string in a variable is an old darling PHP feature. As long as the last character is an ascii letter, it is incremented to the next ascii value, or wrap to a. 

This feature is deprecated since PHP 8.3, and it is replaced by a call to str_increment() and str_decrement() (the last one is a new feature).
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/increment-on-non-alphanumeric-string-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/increment-on-non-alphanumeric-string-is-deprecated.html","name":"Increment on non-alphanumeric string is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"Incrementing a string in a variable is an old darling PHP feature","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/increment-on-non-alphanumeric-string-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

// Increment on non-alphanumeric string is deprecated! (in PHP 8.5)
$a = 'aaa';
echo ++$a;

// Increment on non-alphanumeric string is deprecated
$a = 'aaa!';
echo ++$a;

?>
```

## Alternatives
+ Use str_increment().
+ Change the generating system entirely.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[incrementNonAlphanumeric](incrementNonAlphanumeric)