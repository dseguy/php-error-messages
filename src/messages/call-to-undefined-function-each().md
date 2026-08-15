# Call to undefined function each()

## Description
each() used to be a PHP native function. It was deprecated in PHP 7.4, and is undefined since PHP 8.0.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/call-to-undefined-function-each().html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/call-to-undefined-function-each().html","name":"Call to undefined function each()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"each() used to be a PHP native function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/call-to-undefined-function-each().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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