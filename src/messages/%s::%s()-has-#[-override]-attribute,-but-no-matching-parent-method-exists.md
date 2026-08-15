# %s::%s() has #[\Override] attribute, but no matching parent method exists

## Description
This error message has two sources: it happens, at compilation time, when the class has no parent, yet has a method with Override attribute. Since the attribute implies that the method is overriding a parent's method, this is not possible.

The second cause is a method that has no counterpart in the parents' classes: there, the attribute plays its actual role.

This error happens when the `Override` attribute was used in PHP version 8.2, or older, and then, the code was moved to PHP 8.3. With the last version change, the attribute became active, and the code is now actually checked.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s::%s()-has-#[-override]-attribute,-but-no-matching-parent-method-exists.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s::%s()-has-#[-override]-attribute,-but-no-matching-parent-method-exists.html","name":"%s::%s() has #[\\Override] attribute, but no matching parent method exists","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:00:09 +0000","dateModified":"Wed, 05 Aug 2026 14:00:09 +0000","description":"This error message has two sources: it happens, at compilation time, when the class has no parent, yet has a method with Override attribute","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s::%s()-has-#[-override]-attribute,-but-no-matching-parent-method-exists.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
	#[Override]
	function foo();
}

class Y extends X {
	#[Override]
	function goo();
}

?>
```

## Alternatives
+ Remove the Override attribute.
+ Add a method with the same name to the parent class.
+ Rename the current method to one that is present in the parent.
+ Stay on PHP 8.2.

## Related error messages
+ [%s::$%s-has-#[--override]-attribute](%s::$%s-has-#\[--override\]-attribute.html)
+ [%s::%s-has-#[--override]-attribute](%s::%s-has-#\[--override\]-attribute.html)
