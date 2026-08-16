# %s and %s define the same constant (%s) in the composition of %s. However, the definition differs and is considered incompatible. Class was composed

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-and-%s-define-the-same-constant-(%s)-in-the-composition-of-%s.-however,-the-definition-differs-and-is-considered-incompatible.-class-was-composed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-and-%s-define-the-same-constant-(%s)-in-the-composition-of-%s.-however,-the-definition-differs-and-is-considered-incompatible.-class-was-composed.html","name":"%s and %s define the same constant (%s) in the composition of %s. However, the definition differs and is considered incompatible. Class was composed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 13:26:42 +0000","dateModified":"Thu, 06 Aug 2026 13:26:42 +0000","description":"There is not conflict resolution, when a class and a trait defined the same constant","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-and-%s-define-the-same-constant-(%s)-in-the-composition-of-%s.-however,-the-definition-differs-and-is-considered-incompatible.-class-was-composed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
There is not conflict resolution, when a class and a trait defined the same constant. Both constants must be identical, or face the above error message. 

In order to be compatible, the constants in the class AND in the trait must have the same name, the same value (after eventual resolution of the expression), same visibility and the same type. 

In the case that the constant is defined in a parent class as `private`, the trait may defined it again without conflict.

## Example

```php
<?php

class X {
	private const A = 2;
}

trait T { 
	protected const null|int A = 1 + 1;
	public const null|int B = 1;
	public const null|int C = 1 + 2;
}

class Y extends X {
	protected const int B = 2;
	public const ?int C = 3;
	
	use T; 
}
?>
```

## Literal Examples
+ y and t define the same constant (B) in the composition of y. However, the definition differs and is considered incompatible. Class was composed

## Alternatives
+ Synchronise the constants to make them compatible.
+ Remove the constant from the class.
+ Remove the constant from the trait.

## Related error messages
+ [%s-and-%s-define-the-same-hooked-property-($%s)-in-the-composition-of-%s.-conflict-resolution-between-hooked-properties-is-currently-not-supported.-class-was-composed](%s-and-%s-define-the-same-hooked-property-\($%s\)-in-the-composition-of-%s.-conflict-resolution-between-hooked-properties-is-currently-not-supported.-class-was-composed.html)
+ [%s-and-%s-define-the-same-property-($%s)-in-the-composition-of-%s.-however,-the-definition-differs-and-is-considered-incompatible.-class-was-composed](%s-and-%s-define-the-same-property-\($%s\)-in-the-composition-of-%s.-however,-the-definition-differs-and-is-considered-incompatible.-class-was-composed.html)
+ [cannot-use-trait-%s](cannot-use-trait-%s.html)
