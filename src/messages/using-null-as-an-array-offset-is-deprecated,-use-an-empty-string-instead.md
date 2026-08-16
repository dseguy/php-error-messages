# Using null as an array offset is deprecated, use an empty string instead

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-null-as-an-array-offset-is-deprecated,-use-an-empty-string-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-null-as-an-array-offset-is-deprecated,-use-an-empty-string-instead.html","name":"Using null as an array offset is deprecated, use an empty string instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-10-19T10:21:17+02:00","dateModified":"2025-11-18T06:36:11+01:00","description":"Avoid using null as an array index","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-null-as-an-array-offset-is-deprecated,-use-an-empty-string-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Avoid using null as an array index. PHP converts it silently to an empty string anyway.

## Example

```php
<?php

$array = ['a' => 2];
$array[null] = 3;

?>
```

## Alternatives
+ Replace the ``null`` with an empty string.
+ Check the value before using it as an array index.

## Related error messages
+ [using-null-as-the-key-parameter-for-array_key_exists()-is-deprecated,-use-an-empty-string-instead](using-null-as-the-key-parameter-for-array\_key\_exists\(\)-is-deprecated,-use-an-empty-string-instead.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[NullAsArrayOffset](NullAsArrayOffset)