# get_defined_functions(): Setting $exclude_disabled to false has no effect

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/get_defined_functions():-setting-$exclude_disabled-to-false-has-no-effect.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/get_defined_functions():-setting-$exclude_disabled-to-false-has-no-effect.html","name":"get_defined_functions(): Setting $exclude_disabled to false has no effect","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The first (and only) parameter of the PHP native function get_defined_functions() is deprecated since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/get_defined_functions():-setting-$exclude_disabled-to-false-has-no-effect.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The first (and only) parameter of the PHP native function get_defined_functions() is deprecated since PHP 8.0 and will disappear in PHP 9.

## Example

```php
<?php

$list = get_defined_functions(false); 

?>
```

## Alternatives
+ Remove all parameter usage when calling get_defined_functions(), and fetch the list of disabled functions another way.
+ Check that the parameter is never false before usage.
