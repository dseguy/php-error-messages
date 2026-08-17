# %s::$%s has #[\\Override] attribute

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/ps::$ps-has-s[--override]-attribute.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/ps::$ps-has-s[--override]-attribute.html","name":"%s::$%s has #[\\\\Override] attribute","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-07-17T22:59:23+02:00","dateModified":"2026-08-06T15:27:15+02:00","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/ps::$ps-has-s[--override]-attribute.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP 8.5 extends the `#[\Override]` attribute, previously usable only on methods, so that it can also be applied to properties. It tells the engine that the property is expected to override a property of the same name declared in a parent class or an implemented interface, so that the engine can check that this is really the case.

Here, `Y::$b` is marked as overriding, but `X` (the parent of `Y`) has no `$b` property at all -- only `$a`. Since there is nothing to override, the attribute is meaningless, and PHP reports it as an error at compile time. The full message continues with ', but no matching parent property exists'.

This error is also raised when the class using the attribute has no parent at all, or when the property is declared in a trait whose using class has no matching parent property.

## Example

```php
<?php

class X {
    public int $a = 1;
}

class Y extends X {
    #[\Override]
    public int $b = 2;
}

?>
```

## Literal Examples
+ Y::$b has #[\Override] attribute, but no matching parent property exists

## Alternatives
+ Remove the ``#[\Override]`` attribute.
+ Rename the property to match the name used by the parent class or interface.
+ Add the property, with the same name, to the parent class.

## Related error messages
+ [%s::%s()-has-#[-override]-attribute,-but-no-matching-parent-method-exists](%s::%s\(\)-has-#\[-override\]-attribute,-but-no-matching-parent-method-exists.html)
+ [has-#[-override]-attribute,-but-no-matching-parent-method-exists](has-#\[-override\]-attribute,-but-no-matching-parent-method-exists.html)
+ [%s::%s-has-#[--override]-attribute](%s::%s-has-#\[--override\]-attribute.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[overrideAttributeOnProperty85](overrideAttributeOnProperty85)