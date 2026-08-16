# get_defined_functions(): The $exclude_disabled parameter has no effect since PHP 8.0

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/get_defined_functions():-the-$exclude_disabled-parameter-has-no-effect-since-php-8.0.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/get_defined_functions():-the-$exclude_disabled-parameter-has-no-effect-since-php-8.0.html","name":"get_defined_functions(): The $exclude_disabled parameter has no effect since PHP 8.0","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 17:37:52 +0000","dateModified":"Mon, 13 Jul 2026 17:37:52 +0000","description":"The ``$exclude_disabled`` parameter of the function get_defined_functions() function is unused since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/get_defined_functions():-the-$exclude_disabled-parameter-has-no-effect-since-php-8.0.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `$exclude_disabled` parameter of the function get_defined_functions() function is unused since PHP 8.0. In PHP 7.0, it used to remove the disabled function from the result of this function.

## Example

```php
<?php

    print_r(get_defined_functions(false));

?>
```

## Alternatives
+ Remove the parameter from any call to get_defined_functions().

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[get_defined_functions](get_defined_functions)