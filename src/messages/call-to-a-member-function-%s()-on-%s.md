# Call to a member function %s() on %s

## Description
This error happens when the object syntax is used on a string. A string is a scalar type, and cannot hold method, properties nor constants. The type of the variable should be checked before usage. This also happens with the nullsafe operator, which only protects against NULL used as an object.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/call-to-a-member-function-%s()-on-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/call-to-a-member-function-%s()-on-%s.html","name":"Call to a member function %s() on %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"This error happens when the object syntax is used on a string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/call-to-a-member-function-%s()-on-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

'a'?->foo();

$string = 'abc';
$string->foo();

?>
```

## Literal Examples
+ Call to a member function foo() on string
+ Call to a member function foo() on int
+ Call to a member function foo() on null

## Alternatives
+ Check the type of the object before usage.

## Related error messages
+ [the-sqlite3-object-has-not-been-correctly-initialised-or-is-already-closed](asdf)
