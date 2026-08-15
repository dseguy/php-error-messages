# Could not find trait %s

## Description
A trait is named in a use expression inside a class, but it doesn't exist, or is not yet loaded by PHP. 

The trait may be included in a different use expression. Then, it generates a distinct error message. 

Note that when the trait exists and is known to PHP, there is a distinct error message.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/could-not-find-trait-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/could-not-find-trait-%s.html","name":"Could not find trait %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"A trait is named in a use expression inside a class, but it doesn't exist, or is not yet loaded by PHP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/could-not-find-trait-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php
trait A {
    public function foo(){}
}

class B {
    use A {
        C::foo as tf;
    }
}

?>
```

## Literal Examples
+ Could not find trait C

## Alternatives
+ Remove the expression that mentions the non-existing trait.
+ Create the missing trait.
+ Add the trait to the class.
