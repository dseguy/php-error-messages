# contains an invalid cURL option

## Description
`curl_setopt()` uses a cURL option as second parameter. These options are PHP native constants, and use the prefix `CURLOPT_`, which resolve to an integer.

It is possible to use the equivalent integer to set a cURL option, for example via a variable. The value of this variable must be checked to be a valid cURL constant before usage.

Using another type instead of a cURL constant is reported as an error of type.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/contains-an-invalid-curl-option.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/contains-an-invalid-curl-option.html","name":"contains an invalid cURL option","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"``curl_setopt()`` uses a cURL option as second parameter","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/contains-an-invalid-curl-option.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

$ch = curl_init(http://www.example.com/);
$fp = fopen(example_homepage.txt, w);

curl_setopt($ch, 12332, $fp);
curl_setopt($ch, 'abc', $fp);

?>
```

## Alternatives
+ Use the ``CURLOPT_*`` constant.
+ Check that the intended value may be resolved as a ``CURLOPT_*`` constant (``CURLOPT_APPEND`` === 50, so 50 may be used; etc.).

## Related error messages
+ [must-be-of-type-%s,-%s-given](must-be-of-type-%s,-%s-given.html)

## Related error messages
+ [cURL Predefined Constants](https://www.php.net/manual/en/curl.constants.php)
