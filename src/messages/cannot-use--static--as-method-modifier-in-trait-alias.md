# Cannot use \"static\" as method modifier in trait alias

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use--\"static-\"-as-method-modifier-in-trait-alias.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use--\"static-\"-as-method-modifier-in-trait-alias.html","name":"Cannot use \\\"static\\\" as method modifier in trait alias","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 26 Jul 2026 06:01:32 +0000","dateModified":"Sun, 26 Jul 2026 06:01:32 +0000","description":"The ``as`` adaptation syntax used with ``use`` (traits) can only change the visibility of an imported method, or give it a new alias","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use--\"static-\"-as-method-modifier-in-trait-alias.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `as` adaptation syntax used with `use` (traits) can only change the visibility of an imported method, or give it a new alias. It cannot be used to add the `static` modifier to a method: a trait method's static-ness is fixed by how it is declared in the trait itself, and cannot be altered by the class that imports it.

## Example

```php
<?php

trait Greet
{
    public function hello()
    {
        echo 'hi';
    }
}

class X
{
    use Greet {
        hello as static greetStatically;
    }
}

?>
```

## Literal Examples
+ Cannot use "static" as method modifier in trait alias

## Alternatives
+ Remove the ``static`` modifier from the ``as`` adaptation, and only change the visibility or the alias name.
+ Declare the method as ``static`` directly in the trait, if that is the intended behavior.

## Related error messages
+ [a-precedence-rule-was-defined-for-%s::%s-but-this-method-does-not-exist](a-precedence-rule-was-defined-for-%s::%s-but-this-method-does-not-exist.html)
+ [an-alias-was-defined-for-%s::%s-but-this-method-does-not-exist](an-alias-was-defined-for-%s::%s-but-this-method-does-not-exist.html)
+ [trait-method-%s::%s-has-not-been-applied-as-%s::%s](trait-method-%s::%s-has-not-been-applied-as-%s::%s.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()