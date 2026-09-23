# Creation of dynamic property %s::$" ZEND_LONG_FMT " is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/creation-of-dynamic-property-ps::$-zend_long_fmt--is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/creation-of-dynamic-property-ps::$-zend_long_fmt--is-deprecated.html","name":"Creation of dynamic property %s::$\" ZEND_LONG_FMT \" is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-21T21:41:23+00:00","dateModified":"2026-09-21T21:41:23+00:00","description":"This is the numeric-key twin of the more common ``Creation of dynamic property %s::$%s is deprecated`` notice","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/creation-of-dynamic-property-ps::$-zend_long_fmt--is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This is the numeric-key twin of the more common `Creation of dynamic property %s::$%s is deprecated` notice. It fires when the property key being written is an integer rather than a string -- most often while restoring an object with `unserialize()` from data whose property key was encoded as `i:N;` instead of the usual `s:len:"name";`. Since the class does not declare a property named after that integer and has not opted in with `#[AllowDynamicProperties]`, PHP falls back to creating a dynamic property, but flags it as deprecated just like any other undeclared property write.

As of PHP 8.2, this deprecation also closes a gap where such integer-keyed properties could otherwise bypass the dynamic-property protections entirely.

## Example

```php
<?php

class Foo {
}

// PHP's serialization format allows an object property key to be
// stored as an integer ('i:0;') instead of a string ('s:1:"0";').
$serialized = 'O:3:"Foo":1:{i:0;s:1:"x";}';

$foo = unserialize($serialized);
var_dump($foo);

?>
```

## Literal Examples
+ Creation of dynamic property Foo::$0 is deprecated

## Alternatives
+ Declare the property in the class definition so the key, once cast to string, matches a known property.
+ Add the #[AllowDynamicProperties] attribute to the class if dynamic properties are intentional.
+ Sanitize or validate serialized data before calling unserialize(), rather than trusting arbitrary property keys.

## Related error messages
+ [creation-of-dynamic-property-%s::$%s-is-deprecated](creation-of-dynamic-property-%s::$%s-is-deprecated.html)

## Related error messages
+ [PHP RFC: Deprecate dynamic properties](https://wiki.php.net/rfc/deprecate_dynamic_properties)
+ [AllowDynamicProperties](https://www.php.net/manual/en/class.allowdynamicproperties.php)
+ [unserialize](https://www.php.net/manual/en/function.unserialize.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[dynamicProperties](dynamicProperties)