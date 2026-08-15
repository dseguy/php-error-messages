# DateTimeInterface can't be implemented by user classes

## Description
DateTimeInterface is an interface. It should be available for usage with the implements keyword, but the PHP engines forbids it. Instead, it is recommended to extends the DateTime or DateTimeImmutable classes. 

On the other hand, DateTimeInterface is available to type arguments, properties, etc. or to use with instanceof and catch.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/datetimeinterface-can't-be-implemented-by-user-classes.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/datetimeinterface-can't-be-implemented-by-user-classes.html","name":"DateTimeInterface can't be implemented by user classes","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"DateTimeInterface is an interface","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/datetimeinterface-can't-be-implemented-by-user-classes.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X implements DateTimeInterface {}

?>
```

## Alternatives
+ Extends DateTime class.
+ Extends DateTimeImmutable class.
