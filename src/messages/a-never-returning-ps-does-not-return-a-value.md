# A never returning %s does not return a value, but #[\NoDiscard] requires a return value

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/a-never-returning-%s-does-not-return-a-value.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/a-never-returning-%s-does-not-return-a-value.html","name":"A never returning %s does not return a value, but #[\\NoDiscard] requires a return value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 24 Jul 2026 17:27:38 +0000","dateModified":"Fri, 24 Jul 2026 17:27:38 +0000","description":"This definition include contradicting information: the return type ``never`` means that the function will never return, so there should be no return value to handle","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/a-never-returning-%s-does-not-return-a-value.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This definition include contradicting information: the return type `never` means that the function will never return, so there should be no return value to handle. On the other hand, the `NoDiscard` attribute request the caller to do something with the returned values. This is irreconcilable.

## Example

```php
<?php

    #[\NoDiscard]
    function test(): never {
    	throw new \Exception('Error!');
    }

test();

?>
```

## Literal Examples
+ A never returning function does not return a value, but #[\NoDiscard] requires a return value
+ A never returning method does not return a value, but #[\NoDiscard] requires a return value

## Alternatives
+ Remove the ``never`` return type.
+ Remove the ``NoDiscard`` attribute.

## Related error messages
+ [a-void-%s-does-not-return-a-value](a-void-%s-does-not-return-a-value.html)
+ [method-%s::%s-cannot-be-#[--nodiscard]](method-%s::%s-cannot-be-#\[--nodiscard\].html)
+ [method-%s::%s-cannot-be-#[--nodiscard]-error_type](method-%s::%s-cannot-be-#\[--nodiscard\]-error\_type.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()