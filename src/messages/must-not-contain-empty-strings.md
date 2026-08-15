# must not contain empty strings

## Description
The deflate_init() function accepts options. Among the options, there is a dictionary, with a dictionary of preset strings. Theses strings cannot be left empty.

Before PHP 8.2, this bug would crash PHP.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-not-contain-empty-strings.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-not-contain-empty-strings.html","name":"must not contain empty strings","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The deflate_init() function accepts options","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-not-contain-empty-strings.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php
try {
    deflate_init(ZLIB_ENCODING_DEFLATE, [dictionary => [, ]]);
} catch (ValueError $ex) {
    echo $ex->getMessage(), \n;
}
?>
```

## Alternatives
+ Remove the 2nd argument.
+ Remove the 'dictionary' entry in the 2nd argument.
+ Put an actual value in the values of the 'dictionary' entry in the 2nd argument.
