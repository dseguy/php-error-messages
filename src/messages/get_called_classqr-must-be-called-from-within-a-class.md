# get_called_class() must be called from within a class

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/get_called_class()-must-be-called-from-within-a-class.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/get_called_class()-must-be-called-from-within-a-class.html","name":"get_called_class() must be called from within a class","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-02-01T16:11:57+01:00","dateModified":"2025-02-23T09:24:54-05:00","description":"get_called_class() returns the name of the current class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/get_called_class()-must-be-called-from-within-a-class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
get_called_class() returns the name of the current class. It emits an error when it cannot find the current class. 

get_called_class() can only be called from within a class, trait or enumeration. It may be called from a static closure, as long as the closure is created inside a class.

## Example

```php
<?php

get_called_class();

?>
```

## Alternatives
+ Use the magic constant __CLASS__.
+ Use the function inside a class, enumeration or trait.
