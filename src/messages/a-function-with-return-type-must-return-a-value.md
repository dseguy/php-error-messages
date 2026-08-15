# A function with return type must return a value

## Description
When a function has a return type, it must have a return command in its block, which must also have an argument. In this illustration, return has no argument, so it is return void, and this is detected at compilation time. 

Note that PHP lint doesn't check the type of the returned value at linting time: any return value makes this error go away. Type is checked at execution time, and only when the expression is used: it may trigger a 'Return value must be of type int, string returned'.

This also applies to closures, methods, arrow functions.

This error is displayed with any return that doesn't have an argument. They might be several of them in a single function.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/a-function-with-return-type-must-return-a-value.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/a-function-with-return-type-must-return-a-value.html","name":"A function with return type must return a value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"When a function has a return type, it must have a return command in its block, which must also have an argument","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/a-function-with-return-type-must-return-a-value.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php
function foo(): int {
	return ;
}

?>
```

## Alternatives
+ Add a returned value to all the return command.
+ Check all the return commands for returned values.
+ Remove the return type.

## Related error messages
+ [return-value-of-%s%s%s()-must-%s%s%s,-%s%s-returned](asdf)
+ [%s%s%s():-return-value-must-be-of-type-%s,-%s-returned](asdf)
