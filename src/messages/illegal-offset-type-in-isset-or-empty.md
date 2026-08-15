# Illegal offset type in isset or empty

## Description
PHP only uses integers and strings as array index. While certain other types may be converted silently to those types, as `null` or `boolean`, objects and arrays yield an illegal type for index.

This error is is specific to `isset` and `empty`: these functions are usually very silent, yet an dedicated error message was created for the type check.

This error is reported at compile time when PHP can detect the type then, otherwise, it is reported at execution time.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/illegal-offset-type-in-isset-or-empty.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/illegal-offset-type-in-isset-or-empty.html","name":"Illegal offset type in isset or empty","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"PHP only uses integers and strings as array index","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/illegal-offset-type-in-isset-or-empty.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

$array = [1];

var_dump(isset($array[[]]));

?>
```

## Alternatives
+ Convert these types into a string or a integer first.
+ Cast these types into a string or a integer first.

## Related error messages
+ [cannot-access-offset-of-type-%s-in-isset-or-empty](cannot-access-offset-of-type-%s-in-isset-or-empty.html)
+ [cannot-access-offset-of-type-%s-on-%s](cannot-access-offset-of-type-%s-on-%s.html)
+ [illegal-offset-type-in-unset](illegal-offset-type-in-unset.html)
+ [illegal-offset-type](illegal-offset-type.html)
