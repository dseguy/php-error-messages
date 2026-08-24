# Making a destructor a Generator is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/making-a-destructor-a-generator-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/making-a-destructor-a-generator-is-deprecated.html","name":"Making a destructor a Generator is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-17T16:24:13+02:00","dateModified":"2026-08-17T16:24:13+02:00","description":"Using ``yield`` anywhere in the body of ``__destruct()`` turns it into a Generator function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/making-a-destructor-a-generator-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Using `yield` anywhere in the body of `__destruct()` turns it into a Generator function. A Generator only starts executing once something iterates it, but nothing iterates the return value of a destructor: PHP just calls it during garbage collection and discards the result. As a consequence, the body of such a destructor never actually runs, silently skipping any cleanup code it contains.

Since this pattern is virtually always a mistake, PHP 8.6 deprecates making a destructor a Generator.

## Example

```php
<?php

class X {
    public function __destruct() {
        yield 1;
    }
}

$x = new X;
unset($x);

?>
```

## Literal Examples
+ Making a destructor a Generator is deprecated

## Alternatives
+ Move the code that uses ``yield`` into a separate, regular method that ``__destruct()`` calls directly.
+ If the destructor only needs to release resources, replace ``yield`` with plain statements.

## Related error messages
+ [making-a-constructor-a-generator-is-deprecated](making-a-constructor-a-generator-is-deprecated.html)
+ [returning-a-value-from-a-destructor-is-deprecated](returning-a-value-from-a-destructor-is-deprecated.html)
+ [destructors-cannot-declare-a-return-type](destructors-cannot-declare-a-return-type.html)

## Related error messages
+ [Generator overview](https://www.php.net/manual/en/language.generators.overview.php)
+ [Constructors and destructors](https://www.php.net/manual/en/language.oop5.decon.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[destructorAsGenerator](destructorAsGenerator)