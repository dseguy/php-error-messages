# Unbacked enum %s cannot be converted to a string

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unbacked-enum-ps-cannot-be-converted-to-a-string.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unbacked-enum-ps-cannot-be-converted-to-a-string.html","name":"Unbacked enum %s cannot be converted to a string","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-01-29T12:00:48+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"http_build_query() function convert an array of strings to their URL encoded version","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unbacked-enum-ps-cannot-be-converted-to-a-string.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
http_build_query() function convert an array of strings to their URL encoded version. When encountering an enumeration, it makes it work with string and integer enumerations, but not with the unbacked enumerations.

## Example

```php
<?php

enum E {
    case A;
}

try {
    echo http_build_query(['e' => E::A]);
} catch (ValueError $e) {
    echo $e->getMessage(), \n;
}

?>
```

## Alternatives
+ Add a type to the enumeration, ``string`` or ``int``. Then, add values to the cases.
+ Convert the enumeration cases into strings before using them with http_build_query().

## Related error messages
+ [http_build_query](https://www.php.net/manual/en/function.http-build-query.php)
