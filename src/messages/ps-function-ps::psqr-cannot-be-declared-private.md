# %s function %s::%s() cannot be declared private

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-function-%s::%s()-cannot-be-declared-private.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-function-%s::%s()-cannot-be-declared-private.html","name":"%s function %s::%s() cannot be declared private","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-11-07T11:35:32+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"A method may be private, as in only available to current class, or abstract, as in always redefined in a child class, but not both at the same time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-function-%s::%s()-cannot-be-declared-private.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A method may be private, as in only available to current class, or abstract, as in always redefined in a child class, but not both at the same time. 

These two properties are mutually exclusive.

## Example

```php
<?php

class X {
	private abstract function foo() ;
}

?>
```

## Literal Examples
+ abstract function X::foo() cannot be declared private

## Alternatives
+ Make the method protected or public.
+ Remove the abstract keyword.
