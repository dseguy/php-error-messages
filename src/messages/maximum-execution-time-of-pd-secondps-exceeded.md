# Maximum execution time of %d second%s exceeded

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/maximum-execution-time-of-%d-second%s-exceeded.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/maximum-execution-time-of-%d-second%s-exceeded.html","name":"Maximum execution time of %d second%s exceeded","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"This error indicates that the application has been running for longer than an acceptable amount of time: by default, 30 seconds","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/maximum-execution-time-of-%d-second%s-exceeded.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error indicates that the application has been running for longer than an acceptable amount of time: by default, 30 seconds. 

To avoid working indefinitely on a task, PHP cancels its execution.

It is common to set this duration to low levels, so as to keep execution time short. In a production environement, any such error should be investigated, and refactored.

## Example

```php
<?php

// an infinite loop that will break beyond max execution time, eventually
for(;;) {}

?>
```

## Literal Examples
+ Maximum execution time of 30 seconds exceeded

## Alternatives
+ Write faster PHP code.
+ Write lighter PHP code.
+ Update the configuration directive max_execution_time for the whole application.
+ Update the configuration directive max_execution_time for a part of the application.
