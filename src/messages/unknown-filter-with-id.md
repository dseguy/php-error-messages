# Unknown filter with ID

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unknown-filter-with-id.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unknown-filter-with-id.html","name":"Unknown filter with ID","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"filter_var_array(), and other filter functions, use the second argument to identify which filter to apply","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unknown-filter-with-id.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
filter_var_array(), and other filter functions, use the second argument to identify which filter to apply. They are usually provided as constants, such as `FILTER_SANITIZE_STRING`. There are a limited, although long, set of such constants, and not all integer values are used. This is the case for `-1`.

## Example

```php
<?php

var_dump(filter_var_array(array(=>), 128));

?>
```

## Literal Examples
+ Unknown filter with ID -1
+ Unknown filter with ID 128

## Alternatives
+ Use a valid constant to specify the filter.
+ Do not use literal integers, but constants.
