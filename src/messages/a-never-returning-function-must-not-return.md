# A never-returning function must not return

## Description
When using the `never` keyword, the function shall not use the `return` keyword. `never` means that the function will not return, but rather `die`, throw an exception, or trigger an error.

Also note that `never` cannot be used in a union or intersection type.

This error message applies to functions, closures and arrow functions. In PHP 8.4, a separate message applies to methods.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/a-never-returning-function-must-not-return.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/a-never-returning-function-must-not-return.html","name":"A never-returning function must not return","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"When using the ``never`` keyword, the function shall not use the ``return`` keyword","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/a-never-returning-function-must-not-return.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

function foo() : never {
	return true;
}

?>
```

## Alternatives
+ Remove the ``return`` keyword in the body of the function.
+ Change the ``never`` return type to another type.

## Related error messages
+ [a-never-returning-method-must-not-return](a-never-returning-method-must-not-return.html)
