# %s::__sleep() should return an array only containing the names of instance-variables to serialize

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s::__sleep()-should-return-an-array-only-containing-the-names-of-instance-variables-to-serialize.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s::__sleep()-should-return-an-array-only-containing-the-names-of-instance-variables-to-serialize.html","name":"%s::__sleep() should return an array only containing the names of instance-variables to serialize","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Apr 2026 08:55:17 +0000","dateModified":"Fri, 10 Apr 2026 08:55:17 +0000","description":"The return type of ``__sleep`` is actually ``array``, even when it is not mentioned","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s::__sleep()-should-return-an-array-only-containing-the-names-of-instance-variables-to-serialize.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The return type of `__sleep` is actually `array`, even when it is not mentioned. Any other returned value generate this error.

## Example

```php
<?php

class X {
    function __sleep() {
        return 1;
    }
}

serialize(new X);

?>
```

## Alternatives
+ Return an array from ``__sleep``.
+ Add the return type ``array`` and return an array from ``__sleep``.
+ Remove the ``__sleep()`` method.

## Related error messages
+ [%s"-returned-as-member-variable-from-__sleep()-but-does-not-exist](%s-returned-as-member-variable-from-\_\_sleep\(\)-but-does-not-exist.html)

In previous PHP versions, this error message used to be :ref:`sleep-should-return-an-array-only-containing-the-names-of-instance-variables-to-serialize.`.