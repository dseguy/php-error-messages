# Methods with the same name as their class will not be constructors in a future version of PHP; %s has a deprecated constructor

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/methods-with-the-same-name-as-their-class-will-not-be-constructors-in-a-future-version-of-php;-%s-has-a-deprecated-constructor.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/methods-with-the-same-name-as-their-class-will-not-be-constructors-in-a-future-version-of-php;-%s-has-a-deprecated-constructor.html","name":"Methods with the same name as their class will not be constructors in a future version of PHP; %s has a deprecated constructor","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"In PHP 4, the constructor of a class was the method with the same name as the class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/methods-with-the-same-name-as-their-class-will-not-be-constructors-in-a-future-version-of-php;-%s-has-a-deprecated-constructor.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
In PHP 4, the constructor of a class was the method with the same name as the class. In the example, the `X::X` method is the constructor. This was deprecated in PHP 7.0, in favor of using the `__construct` method.

During the deprecation phase, the eponymous method was still used as the constructor, if the `__construct` method was not available.

## Example

```php
<?php

class X {
    function X() {}
}

?>
```

## Alternatives
+ Rename the eponymous method to ``__construct``.
+ Crete the ``__construct`` method, and make it call the eponymous method.
