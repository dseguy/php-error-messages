# The predefined locally scoped $http_response_header variable is deprecated, call http_get_last_response_headers() instead

## Description
The PHP variable `$http_response_header` is automagically created after a call to a remote resource. It contains the returned headers, for further analysis. This variable is deprecated since PHP 8.5, and will disappear in PHP 9.0. It should be replaced with a call to http_get_last_response_headers().
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-predefined-locally-scoped-$http_response_header-variable-is-deprecated,.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-predefined-locally-scoped-$http_response_header-variable-is-deprecated,.html","name":"The predefined locally scoped $http_response_header variable is deprecated, call http_get_last_response_headers() instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:13:50 +0000","dateModified":"Tue, 31 Mar 2026 09:13:50 +0000","description":"The PHP variable ``$http_response_header`` is automagically created after a call to a remote resource","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-predefined-locally-scoped-$http_response_header-variable-is-deprecated,.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

    file_get_contents(https://www.php.net/);
    var_dump($http_response_header); // variable is populated in the local scope

?>
```

## Alternatives
+ Call ``http_get_last_response_headers()`` instead of relying on the variable.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[http_response_header](http_response_header)