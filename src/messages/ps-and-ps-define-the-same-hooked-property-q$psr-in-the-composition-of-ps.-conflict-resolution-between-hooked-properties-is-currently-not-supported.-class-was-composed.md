# %s and %s define the same hooked property ($%s) in the composition of %s. Conflict resolution between hooked properties is currently not supported. Class was composed

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/ps-and-ps-define-the-same-hooked-property-q$psr-in-the-composition-of-ps.-conflict-resolution-between-hooked-properties-is-currently-not-supported.-class-was-composed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/ps-and-ps-define-the-same-hooked-property-q$psr-in-the-composition-of-ps.-conflict-resolution-between-hooked-properties-is-currently-not-supported.-class-was-composed.html","name":"%s and %s define the same hooked property ($%s) in the composition of %s. Conflict resolution between hooked properties is currently not supported. Class was composed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-07-24T19:28:38+02:00","dateModified":"2026-07-24T19:28:38+02:00","description":"When a class and a trait it uses both declare hooks for a property of the same name, PHP cannot merge the two definitions, even when the hooks are effectively identical","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/ps-and-ps-define-the-same-hooked-property-q$psr-in-the-composition-of-ps.-conflict-resolution-between-hooked-properties-is-currently-not-supported.-class-was-composed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
When a class and a trait it uses both declare hooks for a property of the same name, PHP cannot merge the two definitions, even when the hooks are effectively identical.

For plain properties, a trait property is simply overridden by an identically named property in the using class, as long as the two are type-compatible. For methods, name clashes between traits can be settled with the `insteadof` and `as` operators. Hooked properties have neither mechanism: there is no way to tell PHP which of the two conflicting sets of hooks (`get`/`set`) should win, so the compiler always raises a fatal error instead of picking one silently.

The same restriction applies when two different traits, both used by the same class, declare hooks for a property with the same name.

## Example

```php
<?php

trait T {
    public $prop {
        get { echo __METHOD__, PHP_EOL; }
        set { echo __METHOD__, PHP_EOL; }
    }
}

class C {
    use T;

    public $prop {
        get { echo __METHOD__, PHP_EOL; }
        set { echo __METHOD__, PHP_EOL; }
    }
}

?>
```

## Literal Examples
+ C and T define the same hooked property ($prop) in the composition of C. Conflict resolution between hooked properties is currently not supported. Class was composed

## Alternatives
+ Rename the property in the trait or in the class so that they no longer collide.
+ Remove the hooks from the property in the class, and rely solely on the trait's hooks.
+ Remove the hooks from the property in the trait, and only declare hooks in the class.
+ Move the shared behaviour into a method that both the trait and the class hooks can call, instead of duplicating the hooks.

## Related error messages
+ [%s-and-%s-define-the-same-constant-(%s)-in-the-composition-of-%s.-however,-the-definition-differs-and-is-considered-incompatible.-class-was-composed](%s-and-%s-define-the-same-constant-\(%s\)-in-the-composition-of-%s.-however,-the-definition-differs-and-is-considered-incompatible.-class-was-composed.html)
+ [cannot-redeclare-property-hook](cannot-redeclare-property-hook.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()