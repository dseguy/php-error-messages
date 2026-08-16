# Property %s does not exist

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/property-%s-does-not-exist.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/property-%s-does-not-exist.html","name":"Property %s does not exist","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-01-09T10:51:55+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"This error happens when the Reflection API fails at getting the description of a non-existent property","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/property-%s-does-not-exist.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error happens when the Reflection API fails at getting the description of a non-existent property. The name of the property should be checked before using the `getProperty` method.

## Example

```php
<?php
    $class = new ReflectionClass('ReflectionClass');
    $property = $class->getProperty('unkown');
    var_dump($property);
?>
```

## Literal Examples
+ Property unknown does not exist

## Alternatives
+ Check that the property exists before using ``getProperty``.

## Related error messages
+ [undefined-property-%s::$%s](undefined-property-%s::$%s.html)

In more recent PHP versions, this error message is now :ref:`property-%s::$%s-does-not-exist`.