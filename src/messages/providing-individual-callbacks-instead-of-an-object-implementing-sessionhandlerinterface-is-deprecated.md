# Providing individual callbacks instead of an object implementing SessionHandlerInterface is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/providing-individual-callbacks-instead-of-an-object-implementing-sessionhandlerinterface-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/providing-individual-callbacks-instead-of-an-object-implementing-sessionhandlerinterface-is-deprecated.html","name":"Providing individual callbacks instead of an object implementing SessionHandlerInterface is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"``session_set_save_handler()`` used to accept six to to nine distinct callables to configure the handler","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/providing-individual-callbacks-instead-of-an-object-implementing-sessionhandlerinterface-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`session_set_save_handler()` used to accept six to to nine distinct callables to configure the handler. In fact, that PHP native function was available even before PHP had objects support. 

Nowadays, there still needs that many callables, but they are expected to be grouped in a class, and checked by the `SessionHandlerInterface` interface.

## Example

```php
<?php

 session_set_save_handler(
    session_open(...),
    session_close(...),
    session_read(...),
    session_write(...),
    session_destroy(...),
    session_gc(...),
    session_create_sid(...),
    session_validate_sid(...),
    session_update_timestamp(...)
);

?>
```

## Alternatives
+ Refactor the callables into a class, add the ``SessionHandlerInterface`` implementation and use that class.
