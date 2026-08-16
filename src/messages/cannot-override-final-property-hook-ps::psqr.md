# Cannot override final property hook %s::%s()

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-override-final-property-hook-%s::%s().html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-override-final-property-hook-%s::%s().html","name":"Cannot override final property hook %s::%s()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-09-28T11:25:51+02:00","dateModified":"2026-07-24T19:28:38+02:00","description":"Property hooks may be declared final, just like any other methods","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-override-final-property-hook-%s::%s().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Property hooks may be declared final, just like any other methods. In that case, it is not possible to override then with a new definition in a child class. 

The property may be declared final as whole, in the property definition; otherwise, each individual hook may be declared final.

## Example

```php
<?php

class X {
	public $property {
		final get => 2;
		set => $this->property = $value;
	}
	// No hook can be changed
	public final $q {
		get => 2;
	}
}

class Y extends X {
	public final $property {
		get => 3;                 // This one cannot be overriden
		set => $this->property = $value; // This one is OK
	}
	public final $q {
		get => 2;
	}
}

?>
```

## Literal Examples
+ Cannot override final property hook $p::get()

## Alternatives
+ Remove the final keyword on the parent hook.
+ Remove the hook in the child class.

## Related error messages
+ [set-access-level-of-%s::$%s-must-be-%s-(as-in-class-%s)%s](set-access-level-of-%s::$%s-must-be-%s-\(as-in-class-%s\)%s.html)
