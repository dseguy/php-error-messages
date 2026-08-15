# never-returning function must not implicitly return

## Description
A never returning function or method never reaches the end of the method, or any return operation. It must either throw an exception, trigger an error, die or exit, or stay in an infinite loop. 

In the case of an empty function, PHP execution reachs the end of the method, and adds an implicit `return null` call, which triggers the TypeError. 

`never` type is checked at execution time, though the presence of `return` in the body of the method triggers it at linting time.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/never-returning-function-must-not-implicitly-return.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/never-returning-function-must-not-implicitly-return.html","name":"never-returning function must not implicitly return","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"A never returning function or method never reaches the end of the method, or any return operation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/never-returning-function-must-not-implicitly-return.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

function foo() : never { }

?>
```

## Alternatives
+ Remove all return calls from the body of the method.
+ Prevent the method to reaching its end.
+ Checks that the method include either a ``throw``, ``die`` or ``exit``, a call to another never-returning method, or an infinite loop.
