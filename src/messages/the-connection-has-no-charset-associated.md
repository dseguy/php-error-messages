# The connection has no charset associated

## Description
This error appears when PHP cannot retrieve the character set used by the connection to MySQL. The mysqli_get_charset() function tries to fetch the data from the connexion, but the result was not usable.

Such error is probably circumstancial: the server may have gone away, or crashed, leading to no answer about charset.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-connection-has-no-charset-associated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-connection-has-no-charset-associated.html","name":"The connection has no charset associated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"This error appears when PHP cannot retrieve the character set used by the connection to MySQL","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-connection-has-no-charset-associated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

    $db = mysqli_init();
    $db->real_connect(localhost,user,password,test);
    var_dump($db->get_charset()); 

?>
```

## Alternatives
+ Check the server health.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()