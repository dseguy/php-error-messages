# Cannot use "abstract" as method modifier in trait alias

## Description
When resolving name conflicts during trait imports, it is not possible to use `abstract` with the `as` keyword. The situation is actually confusing: `abstract` may be the name of the alias, or it could also be understood as the modifier.

The same situation arise with `abstract`, `final` or `readonly`. On the other hand, it is valid to use the visibility modifier to actually change the visibility on the alias.

This message was completed with 'in trait alias', in PHP 8.2.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-\"abstract\"-as-method-modifier-in-trait-alias.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-\"abstract\"-as-method-modifier-in-trait-alias.html","name":"Cannot use \"abstract\" as method modifier in trait alias","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"When resolving name conflicts during trait imports, it is not possible to use ``abstract`` with the ``as`` keyword","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-\"abstract\"-as-method-modifier-in-trait-alias.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php
trait T1 {
	function foo() {}
}
class C1 {
	use T1 {
		T1::foo as abstract;
	}
}
?>
```

## Alternatives
+ Use another name than ``abstract`` for the alias.
+ Use another name than ``abstract`` for the original method.

## Related error messages
+ [cannot-use-'final'-as-method-modifier](asdf)
+ [cannot-use-'static'-as-method-modifier](asdf)
+ [cannot-use-'readonly'-as-method-modifier](asdf)

In previous PHP versions, this error message used to be :ref:`cannot-use-'abstract'-as-method-modifier`.