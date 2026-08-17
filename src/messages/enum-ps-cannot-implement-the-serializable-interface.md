# Enum %s cannot implement the Serializable interface

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/enum-ps-cannot-implement-the-serializable-interface.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/enum-ps-cannot-implement-the-serializable-interface.html","name":"Enum %s cannot implement the Serializable interface","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-04-15T22:30:55+02:00","dateModified":"2025-08-17T16:28:41+02:00","description":"Enumeration cannot be serialized: they are created as needed by the PHP engine, during execution, and they will again at the next execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/enum-ps-cannot-implement-the-serializable-interface.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Enumeration cannot be serialized: they are created as needed by the PHP engine, during execution, and they will again at the next execution.

## Example

```php
<?php

enum E implements Serializable {
    case A;
}

?>
```

## Literal Examples
+ Enum E cannot implement the Serializable interface

## Alternatives
+ Remove the ``serializable`` implements.
+ Make this enumeration a class.
