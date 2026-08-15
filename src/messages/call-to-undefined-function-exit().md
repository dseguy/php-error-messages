# Call to undefined function exit()

## Description
exit and die used to be language constructures, until PHP 8.4. Then, they could not be used in a dynamic function call, such as shown here. Indeed, language constructs are not accessible with that syntax.

Since PHP 8.4, `die` and `exit` are defined as functions, and shall be used with the dynamic call feature.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/call-to-undefined-function-exit().html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/call-to-undefined-function-exit().html","name":"Call to undefined function exit()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"exit and die used to be language constructures, until PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/call-to-undefined-function-exit().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

$function = 'exit';
$function();

?>
```

## Alternatives
+ Upgrade to PHP 8.4.

## Related error messages
+ [call-to-undefined-function](call-to-undefined-function.html)
+ [call-to-undefined-function-each()](call-to-undefined-function-each\(\).html)
