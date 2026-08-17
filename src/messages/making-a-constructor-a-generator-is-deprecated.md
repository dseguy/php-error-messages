# Making a constructor a Generator is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/making-a-constructor-a-generator-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/making-a-constructor-a-generator-is-deprecated.html","name":"Making a constructor a Generator is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-17T16:24:13+02:00","dateModified":"2026-08-17T16:24:13+02:00","description":"Using ``yield`` anywhere in the body of ``__construct()`` turns it into a Generator function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/making-a-constructor-a-generator-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Using `yield` anywhere in the body of `__construct()` turns it into a Generator function. Because a Generator's body only starts running once it is iterated (and nothing iterates a constructor), the code inside such a constructor never runs when the object is created with `new`: initialization is silently skipped.

Since this pattern is virtually always a mistake, PHP 8.6 deprecates making a constructor a Generator.

## Example

```php
<?php

class X {
    public function __construct() {
        yield 1;
    }
}

new X;

?>
```

## Literal Examples
+ Making a constructor a Generator is deprecated

## Alternatives
+ Move the code that uses ``yield`` into a separate, regular method, and call it (or return its Generator) explicitly instead of relying on ``__construct()``.
+ If the constructor only needs to assign properties, replace ``yield`` with plain assignments.

## Related error messages
+ [making-a-destructor-a-generator-is-deprecated](making-a-destructor-a-generator-is-deprecated.html)
+ [returning-a-value-from-a-constructor-is-deprecated](returning-a-value-from-a-constructor-is-deprecated.html)
+ [constructor-%s::%s()-cannot-declare-a-return-type](constructor-%s::%s\(\)-cannot-declare-a-return-type.html)

## Related error messages
+ [Generator overview](https://www.php.net/manual/en/language.generators.overview.php)
+ [Constructors and destructors](https://www.php.net/manual/en/language.oop5.decon.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()