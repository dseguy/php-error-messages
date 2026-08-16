# Unbacked enum %s cannot be converted to a string

## Description
http_build_query() function convert an array of strings to their URL encoded version. When encountering an enumeration, it makes it work with string and integer enumerations, but not with the unbacked enumerations.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unbacked-enum-%s-cannot-be-converted-to-a-string.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unbacked-enum-%s-cannot-be-converted-to-a-string.html","name":"Unbacked enum %s cannot be converted to a string","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"http_build_query() function convert an array of strings to their URL encoded version","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unbacked-enum-%s-cannot-be-converted-to-a-string.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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
