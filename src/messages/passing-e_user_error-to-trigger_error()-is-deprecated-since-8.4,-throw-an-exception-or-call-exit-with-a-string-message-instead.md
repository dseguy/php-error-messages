# Passing E_USER_ERROR to trigger_error() is deprecated since 8.4, throw an exception or call exit with a string message instead

## Description
The error level `E_USER_ERROR` is deprecated since PHP 8.4. It should be replaced with a thrown exceptions. The other levels, `E_USER_NOTICE` and `E_USER_WARNING` are still available.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-e_user_error-to-trigger_error()-is-deprecated-since-8.4,-throw-an-exception-or-call-exit-with-a-string-message-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-e_user_error-to-trigger_error()-is-deprecated-since-8.4,-throw-an-exception-or-call-exit-with-a-string-message-instead.html","name":"Passing E_USER_ERROR to trigger_error() is deprecated since 8.4, throw an exception or call exit with a string message instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The error level ``E_USER_ERROR`` is deprecated since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-e_user_error-to-trigger_error()-is-deprecated-since-8.4,-throw-an-exception-or-call-exit-with-a-string-message-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

trigger_error('message', E_USER_ERROR);

?>
```

## Alternatives
+ Throw an execption.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[E_USER_ERROR](E_USER_ERROR)