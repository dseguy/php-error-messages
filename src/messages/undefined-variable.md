# Undefined variable

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/undefined-variable.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/undefined-variable.html","name":"Undefined variable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-01-10T11:08:31+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"This notice is emitted when a variable is being used before being defined","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/undefined-variable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This notice is emitted when a variable is being used before being defined. In a word, the variable is not created yet, so PHP creates it on the fly, as NULL, then uses it.

The situation arises when reading a variable, such as the `echo` call here. It doesn't happen upon writing, as it is the way to make a variable definition. 

It also happens when using the `compact` native function: it collects the values of variables into an array, and emits this error whenever the variable doesn't exist. The entry is also skipped in the result.

The error may be related to a PHP defined variable, which is not available due to version or context. For example, `$phperrormsg` was removed in PHP 8.0, and `$_GET` is not available in command line context, aka, without a web server.

## Example

```php
<?php

echo $x;

compact('a');

?>
```

## Alternatives
+ Give the variable a default value.
+ Check if the version supports the PHP defined variable.
+ Check if the context supports the variable: web or command line.

## Related error messages
+ [undefined-array-key](undefined-array-key.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[compactThrowsNotice](compactThrowsNotice)