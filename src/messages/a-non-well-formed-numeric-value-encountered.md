# A non well formed numeric value encountered

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/a-non-well-formed-numeric-value-encountered.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/a-non-well-formed-numeric-value-encountered.html","name":"A non well formed numeric value encountered","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"When the operands have to be integer, PHP tries to cast the value to an integer before perform the operation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/a-non-well-formed-numeric-value-encountered.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
When the operands have to be integer, PHP tries to cast the value to an integer before perform the operation. The results varies from impossible to a simple loss of precision. In-between, some of the values cannot be partially converted, and yield this error message. 

Here, the string may be converted to the integer 3, but also will loose some of the non-numeric data 'fd'. PHP warns the user about that partial conversion, in case it doesn't yield the expected results.

When the value cannot be converted to integer due to its type, a fatal error 'Unsupported operand types' is raised.

## Example

```php
<?php

var_dump("3df" % 2);

?>
```

## Alternatives
+ Add an explicit cast to integer before usage.
+ Test if the value has an integer value before usage.

## Related error messages
+ [implicit-conversion-from-float-string-"%s"-to-int-loses](implicit-conversion-from-float-string-%s-to-int-loses.html)
+ [unsupported-operand-types](unsupported-operand-types.html)

In more recent PHP versions, this error message is now :ref:`a-non-numeric-value-encountered`.