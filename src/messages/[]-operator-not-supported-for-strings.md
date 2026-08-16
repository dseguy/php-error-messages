# [] operator not supported for strings

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/[]-operator-not-supported-for-strings.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/[]-operator-not-supported-for-strings.html","name":"[] operator not supported for strings","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"Strings and array share the bracket operator for accessing individual elements, but the append operator ``[]`` is not supported for strings","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/[]-operator-not-supported-for-strings.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Strings and array share the bracket operator for accessing individual elements, but the append operator `[]` is not supported for strings.

## Example

```php
<?php

$string = 'abc';
$string[] = 'b';

?>
```

## Alternatives
+ Use the ``.`` operator to add a string at the end of another.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()