# must be a valid comparison operator

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-valid-comparison-operator.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-valid-comparison-operator.html","name":"must be a valid comparison operator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"version_compare() compares version strings, using an operator, passed as third parameter","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-valid-comparison-operator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
version_compare() compares version strings, using an operator, passed as third parameter. Until PHP 8.1, unknown operators are ignored, and use the default value. 

Nowadays, it is generating a fatal error.

Valid operators are : `<`, `lt`, `<=`, `le`, `>`, `gt`, `>=`, `ge`, `==`, `=`, `eq`, `!=`, `<>`, `ne`

Note that the 3rd parameter is case sensitive, so `NE` also yields the error.

## Example

```php
<?php

version_compare('1.2.4', '1.2.3', '?');

?>
```

## Alternatives
+ Use a valid operator.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[version_compare](version_compare)