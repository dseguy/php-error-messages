# Cannot use 'static' as method modifier

## Description
When resolving name conflicts during trait imports, it is not possible to use `static` with the `as` keyword. The situation is actually confusing: `static` may be the name of the alias, or it could also be understood as the modifier.

The same situation arise with `abstract`, `final` or `readonly`. On the other hand, it is valid to use the visibility modifier to actually change the visibility on the alias.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-'static'-as-method-modifier.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-'static'-as-method-modifier.html","name":"Cannot use 'static' as method modifier","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"When resolving name conflicts during trait imports, it is not possible to use ``static`` with the ``as`` keyword","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-'static'-as-method-modifier.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php
trait T1 {
	function foo() {}
}
class C1 {
	use T1 {
		T1::foo as static;
	}
}
?>
```

## Alternatives
+ Use another name than ``static`` for the alias.
+ Use another name than ``static`` for the original method.

## Related error messages
+ [cannot-use-'final'-as-method-modifier](asdf)
+ [cannot-use-'abstract'-as-method-modifier](asdf)
+ [cannot-use-'readonly'-as-method-modifier](asdf)
+ [cannot-use-"abstract"-as-method-modifier-in-trait-alias](asdf)
