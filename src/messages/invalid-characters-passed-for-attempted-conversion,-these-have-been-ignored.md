# Invalid characters passed for attempted conversion, these have been ignored

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/invalid-characters-passed-for-attempted-conversion,-these-have-been-ignored.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/invalid-characters-passed-for-attempted-conversion,-these-have-been-ignored.html","name":"Invalid characters passed for attempted conversion, these have been ignored","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-10-27T10:37:46+01:00","dateModified":"2025-03-24T18:28:14+01:00","description":"This error is emitted when a character outside the range of validity is used","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/invalid-characters-passed-for-attempted-conversion,-these-have-been-ignored.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error is emitted when a character outside the range of validity is used. 

In the example above, the `octdec()` function converts a string from octal to decimal. Octals are written with figures from 0 to 8. In this case, 9 is excluded. 

The same error is emitted with the other maths bases : for example, using 'a' in a decimal, or 'X' in a hexadecimal, etc.

## Example

```php
<?php

// 9 is not an octal and can't be converted
$decimal = octdec(342391);

// same as above, but the 9 is hidden with the octal notation (starts with 0)
$decimal = octdec(01234567);

?>
```

## Alternatives
+ Check that the characters are in the correct range before attempting the conversion.
