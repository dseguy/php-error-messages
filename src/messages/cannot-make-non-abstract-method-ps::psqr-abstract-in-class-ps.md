# Cannot make non abstract method %s::%s() abstract in class %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-make-non-abstract-method-%s::%s()-abstract-in-class-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-make-non-abstract-method-%s::%s()-abstract-in-class-%s.html","name":"Cannot make non abstract method %s::%s() abstract in class %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"Once a method has a body, it cannot be made ``abstract`` again","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-make-non-abstract-method-%s::%s()-abstract-in-class-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Once a method has a body, it cannot be made `abstract` again. 

On the other hand, the child class may be abstract, while the parent class is not. It just means that new methods must be implemented.

## Example

```php
<?php

class X {
    function foo() {}
}

abstract class Y extends X {
    abstract function foo();
}

?>
```

## Alternatives
+ Make the child class the parent.
+ Change the name of the abstract method in the child class.
+ Remove the abstract option in the child class.
+ Add the abstract option in the parent class.
+ Make the method abstract in the parent class.
