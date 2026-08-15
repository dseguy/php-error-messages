# Using null as the key parameter for array_key_exists() is deprecated, use an empty string instead

## Description
`null` cannot be used as an array index anymore, since PHP 8.5. It is deprecated. As such, there is no point anymore to in passing such values to the first argument of array_key_exists(), and this is also deprecated.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-null-as-the-key-parameter-for-array_key_exists()-is-deprecated,-use-an-empty-string-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-null-as-the-key-parameter-for-array_key_exists()-is-deprecated,-use-an-empty-string-instead.html","name":"Using null as the key parameter for array_key_exists() is deprecated, use an empty string instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"``null`` cannot be used as an array index anymore, since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-null-as-the-key-parameter-for-array_key_exists()-is-deprecated,-use-an-empty-string-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

$array = [null => 1];
var_dump(array_key_exists(null, $array));

?>
```

## Alternatives
+ Use the coalesce operator ``??`` to turn the ``null`` into another value, such as empty string.
+ Replace the ``null`` value by the empty string.

## Related error messages
+ [using-null-as-an-array-offset-is-deprecated,-use-an-empty-string-instead](asdf)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[NullAsArrayOffset](NullAsArrayOffset), [NullWithArrayKeyExists](NullWithArrayKeyExists)