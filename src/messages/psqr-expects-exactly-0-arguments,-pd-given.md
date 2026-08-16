# %s() expects exactly 0 arguments, %d given

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s()-expects-exactly-0-arguments,-%d-given.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s()-expects-exactly-0-arguments,-%d-given.html","name":"%s() expects exactly 0 arguments, %d given","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"The mentioned method does not accept any argument, and reports it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s()-expects-exactly-0-arguments,-%d-given.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The mentioned method does not accept any argument, and reports it. 

This is the case of func_num_args(), get_called_class(), error_get_last(), json_last_error_msg(), mysqli_connect_errno(), mysqli_get_links_stats(), mysqli_connect_error(), DOMDocumentFragment::__construct(), XSLTProcessor::hasExsltSupport(), etc. It is also the case for the property hook `get()`.

## Example

```php
<?php

function dump_error(callable $callable) {
    try {
        var_dump($callable());
    } catch (Throwable $e) {
        var_dump($e->getMessage());
    }
}

?>
```

## Alternatives
+ Remove all arguments when calling such method.
