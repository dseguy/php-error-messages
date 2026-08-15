# Cannot create Closure for parent property hook call

## Description
parent::$property::get() (and ::set()) is dedicated syntax, resolved at compile time, that invokes the property hook implementation the current class overrides. It does not correspond to a standalone, independently callable method the way parent::method() does, so it cannot be captured as a first-class callable / Closure.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-create-closure-for-parent-property-hook-call.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-create-closure-for-parent-property-hook-call.html","name":"Cannot create Closure for parent property hook call","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 30 Jul 2026 07:29:38 +0000","dateModified":"Thu, 30 Jul 2026 07:29:38 +0000","description":"parent::$property::get() (and ::set()) is dedicated syntax, resolved at compile time, that invokes the property hook implementation the current class overrides","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-create-closure-for-parent-property-hook-call.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class Base {
	public string $name = '' {
		get => $this->name;
	}
}

class Child extends Base {
	public string $name = '' {
		get {
			$fn = parent::$name::get(...);
			return $fn();
		}
	}
}

?>
```

## Alternatives
+ Call the parent hook directly instead of turning it into a Closure: parent::$name::get().
+ Wrap the call yourself in an ordinary closure: $fn = fn() => parent::$name::get();

## Related error messages
+ [cannot-use-the-static-modifier-on-a-property-hook](cannot-use-the-static-modifier-on-a-property-hook.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()