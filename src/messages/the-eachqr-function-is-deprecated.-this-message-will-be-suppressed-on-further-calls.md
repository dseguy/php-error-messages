# The each() function is deprecated. This message will be suppressed on further calls

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-eachqr-function-is-deprecated.-this-message-will-be-suppressed-on-further-calls.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-eachqr-function-is-deprecated.-this-message-will-be-suppressed-on-further-calls.html","name":"The each() function is deprecated. This message will be suppressed on further calls","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-11-18T11:20:45+01:00","dateModified":"2025-09-18T06:57:58+02:00","description":"The function ``each`` was deprecated in PHP 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-eachqr-function-is-deprecated.-this-message-will-be-suppressed-on-further-calls.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The function `each` was deprecated in PHP 7.x and removed in PHP 8.0. It was mainly used in loops like the above, and could be replaced advantageously with a `foreach` structure.

## Example

```php
<?php

$array = ['a', 'b'];
while(list($key, $value) = each($array)) {
    print "$key => $value\n";
}

?>
```

## Alternatives
+ Replace the while loop with a foreach one.
+ Replace the loop with a call to one of the array function.
+ Traverse the array with a ``yield`` or ``yield from`` call.
+ Use an ``iterator`` to traverse the array.

In more recent PHP versions, this error message is now :ref:`call-to-undefined-function-each()`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[each](each)