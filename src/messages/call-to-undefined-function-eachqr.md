# Call to undefined function each()

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/call-to-undefined-function-each().html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/call-to-undefined-function-each().html","name":"Call to undefined function each()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-11-18T11:20:45+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"each() used to be a PHP native function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/call-to-undefined-function-each().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
each() used to be a PHP native function. It was deprecated in PHP 7.4, and is undefined since PHP 8.0.

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
+ Downgrade to PHP 7.x.
+ Use ``yield``.
+ Use ``yield from``.
+ Use ``foreach()``.

## Related error messages
+ [call-to-undefined-function](call-to-undefined-function.html)
+ [call-to-undefined-function-exit()](call-to-undefined-function-exit\(\).html)

In previous PHP versions, this error message used to be :ref:`the-each()-function-is-deprecated.-this-message-will-be-suppressed-on-further-calls`.