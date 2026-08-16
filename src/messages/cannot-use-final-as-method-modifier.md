# Cannot use 'final' as method modifier

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-'final'-as-method-modifier.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-'final'-as-method-modifier.html","name":"Cannot use 'final' as method modifier","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"When resolving name conflicts during trait imports, it is not possible to use ``final`` with the ``as`` keyword","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-'final'-as-method-modifier.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
When resolving name conflicts during trait imports, it is not possible to use `final` with the `as` keyword. The situation is actually confusing: `final` may be the name of the alias, or it could also be understood as the modifier.

The same situation arise with `abstract`, `static` or `readonly`. On the other hand, it is valid to use the visibility modifier to actually change the visibility on the alias.

## Example

```php
<?php
trait T1 {
	function foo() {}
}
class C1 {
	use T1 {
		T1::foo as final;
	}
}
?>
```

## Alternatives
+ Use another name than ``final`` for the alias.
+ Use another name than ``final`` for the original method.

## Related error messages
+ [cannot-use-'abstract'-as-method-modifier](cannot-use-abstract-as-method-modifier.html)
+ [cannot-use-'static'-as-method-modifier](cannot-use-static-as-method-modifier.html)
+ [cannot-use-'readonly'-as-method-modifier](cannot-use-readonly-as-method-modifier.html)
+ [cannot-use-"abstract"-as-method-modifier-in-trait-alias](cannot-use-abstract-as-method-modifier-in-trait-alias.html)
