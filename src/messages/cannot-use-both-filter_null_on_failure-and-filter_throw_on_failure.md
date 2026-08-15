# cannot use both FILTER_NULL_ON_FAILURE and FILTER_THROW_ON_FAILURE

## Description
There are two options for the filter extension to handle errors: either return null, or throw an exception. They are mutually exclusive, and can't be used at the same time.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-both-filter_null_on_failure-and-filter_throw_on_failure.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-both-filter_null_on_failure-and-filter_throw_on_failure.html","name":"cannot use both FILTER_NULL_ON_FAILURE and FILTER_THROW_ON_FAILURE","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"There are two options for the filter extension to handle errors: either return null, or throw an exception","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-both-filter_null_on_failure-and-filter_throw_on_failure.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

    // combining constants with |
    filter_var( value: 'bob@example.com', 
                filter: FILTER_VALIDATE_EMAIL, 
                options: FILTER_NULL_ON_FAILURE | FILTER_THROW_ON_FAILURE,
                );

    // combining constants with +
    filter_var( value: 'bob@example.com', 
                filter: FILTER_VALIDATE_EMAIL, 
                options: FILTER_NULL_ON_FAILURE + FILTER_THROW_ON_FAILURE,
                );


    // FILTER_NULL_ON_FAILURE + FILTER_THROW_ON_FAILURE = 402653184
    filter_var( value: 'bob@example.com', 
                filter: FILTER_VALIDATE_EMAIL, 
                options: 402653184,
                );

?>
```

## Alternatives
+ Use only one of the two constants.
+ When providing the options as an integer, make sure the bytes 27 and 28 are not set at the same time.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()