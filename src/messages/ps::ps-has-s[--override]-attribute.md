# %s::%s has #[\\Override] attribute

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/ps::ps-has-s[--override]-attribute.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/ps::ps-has-s[--override]-attribute.html","name":"%s::%s has #[\\\\Override] attribute","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-04T21:25:09+02:00","dateModified":"2026-08-06T15:27:15+02:00","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/ps::ps-has-s[--override]-attribute.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP 8.6 extends the `#[\Override]` attribute, previously usable only on methods and properties, to class constants and enum cases, the later being internally a special kind of class constant. It tells the engine that the constant is expected to override a constant of the same name declared in a parent class or an implemented interface, so that the engine can check that this is really the case.

Here, `Square::COLOR` is marked as overriding, but `Shape`, the interface `Square` implements, only declares `SIDES`, not `COLOR`. Since there is nothing to override, the attribute is meaningless, and PHP reports it as an error at compile time. The full message continues with ', but no matching parent constant exists'.

Only public and protected constants of a parent class or implemented interface satisfy the attribute; private constants do not count. This error is also raised when the class using the attribute has no parent and implements no interface at all.

## Example

```php
<?php

interface Shape {
    const SIDES = 0;
}

class Square implements Shape {
    #[\Override]
    const SIDES = 4; // Fine, overrides Shape::SIDES

    #[\Override]
    const COLOR = 'blue'; // Fatal error, no matching parent constant
}

?>
```

## Literal Examples
+ Square::COLOR has #[\Override] attribute, but no matching parent constant exists

## Alternatives
+ Remove the ``#[\Override]`` attribute.
+ Rename the constant, or enum case, to match one declared in a parent class or interface.
+ Add a constant with the same name to the parent class or interface.

## Related error messages
+ [%s::%s()-has-#[-override]-attribute,-but-no-matching-parent-method-exists](%s::%s\(\)-has-#\[-override\]-attribute,-but-no-matching-parent-method-exists.html)
+ [%s::$%s-has-#[--override]-attribute](%s::$%s-has-#\[--override\]-attribute.html)
+ [has-#[-override]-attribute,-but-no-matching-parent-method-exists](has-#\[-override\]-attribute,-but-no-matching-parent-method-exists.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[overrideAttributeOnConstant86](overrideAttributeOnConstant86)