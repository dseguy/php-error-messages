# cannot be LC_ALL

## Description
The 3rd argument ($category) of dcgettext() and the 5th argument ($category) of dcngettext() cannot be LC_ALL.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-be-lc_all.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-be-lc_all.html","name":"cannot be LC_ALL","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The 3rd argument ($category) of dcgettext() and the 5th argument ($category) of dcngettext() cannot be LC_ALL","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-be-lc_all.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

dcgettext('a', 'item', LC_ALL);
dcngettext('b', 'item', 'item2', 1, LC_ALL);

?>
```

## Alternatives
+ Use one of the valid categories: LC_CTYPE, LC_NUMERIC, LC_TIME, LC_COLLATE, LC_MONETARY, LC_MESSAGES and LC_ALL.

## Related error messages
+ [dcgettext](https://www.php.net/manual/en/function.dcgettext.php)
+ [dcngettext](https://www.php.net/manual/en/function.dcngettext.php)
