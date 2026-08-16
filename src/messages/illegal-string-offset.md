# illegal string offset

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/illegal-string-offset.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/illegal-string-offset.html","name":"illegal string offset","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"String shall use the array syntax, with the square brackets","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/illegal-string-offset.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
String shall use the array syntax, with the square brackets. Then, the index in that syntax must be an integer, or must be cast to integer. 

When the index cannot be converted to an integer, this warning is displayed. PHP proceeds to cast the value to integer, and use it. It will often be 0, but not always.

An extended error also appear if the result of the conversion is larger than the length of the string.

## Example

```php
<?php
  var_dump(foobar[4foo]);
  // displays 'a' + a warning

  var_dump(foobar[-4foo]);
  // displays 'o' + a warning
?>
```

## Alternatives
+ Use a cast operator to make the conversion explicit.
+ Check the type of the index to be integer before using it.
+ Use substr() to access a specific offset.

## Related error messages
+ [uninitialized-string-offset](uninitialized-string-offset.html)
