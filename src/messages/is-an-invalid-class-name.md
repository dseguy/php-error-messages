# '%s' is an invalid class name

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/is-an-invalid-class-name.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/is-an-invalid-class-name.html","name":"'%s' is an invalid class name","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 13:57:09 +0000","dateModified":"Wed, 05 Aug 2026 13:57:09 +0000","description":"This error is emitted when a fully qualified name is used as a type (property, constant, parameter, returntype), and that cannot be a valid name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/is-an-invalid-class-name.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error is emitted when a fully qualified name is used as a type (property, constant, parameter, returntype), and that cannot be a valid name. For example, this applies to `\self`, `\static`, `\parent`. Other keywords, such as `true`, `null` get a different error message. 

Note also that all keywords are not covered with this error message, and some have slipped through the checks: for example, `\interface`, `\class`, `\enum`, `\resource`... are all valid code. In fact, PHP won't create objects of such types, so this makes such type unusable.

## Example

```php
<?php

class X {
	function foo(\self $s) {}
}

?>
```

## Literal Examples
+ '\self' is an invalid class name
+ '\parent' is an invalid class name
+ '\static' is an invalid class name

## Alternatives
+ Do not use PHP keywords as fully qualified name with a type.

## Related error messages
+ [type-declaration-'%s'-must-be-unqualified](type-declaration-%s-must-be-unqualified.html)
+ [namespace-%s-is-an-invalid-class-name](namespace-%s-is-an-invalid-class-name.html)
