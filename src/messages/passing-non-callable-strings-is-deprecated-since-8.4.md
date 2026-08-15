# Passing non-callable strings is deprecated since 8.4

## Description
xml_set_processing_instruction_handler() requires a valid method to be passed. Closure, first class callable, and other callable structures are possible. When using a string, make sure it references an existing function name.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-non-callable-strings-is-deprecated-since-8.4.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-non-callable-strings-is-deprecated-since-8.4.html","name":"Passing non-callable strings is deprecated since 8.4","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"xml_set_processing_instruction_handler() requires a valid method to be passed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-non-callable-strings-is-deprecated-since-8.4.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

// empty string is not a valid callable
xml_set_processing_instruction_handler($parser, '');

// This cannot be a valid function name
xml_set_processing_instruction_handler($parser, '123foo');

?>
```

## Alternatives
+ Use a valid function name: non empty string, and a valid name format.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()