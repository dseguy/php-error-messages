# The SQLite3 object has not been correctly initialised or is already closed

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-sqlite3-object-has-not-been-correctly-initialised-or-is-already-closed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-sqlite3-object-has-not-been-correctly-initialised-or-is-already-closed.html","name":"The SQLite3 object has not been correctly initialised or is already closed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 25 Jul 2026 15:31:33 +0000","dateModified":"Sat, 25 Jul 2026 15:31:33 +0000","description":"There was an attempt to use the ``Sqlite3`` database, while it is not yet initialised, or already closed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-sqlite3-object-has-not-been-correctly-initialised-or-is-already-closed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
There was an attempt to use the `Sqlite3` database, while it is not yet initialised, or already closed. 

When extending the `Sqlite3` class, make sure the constructor calls the parent constructor, so that `Sqlite3` is actually initiliazed.

Note that the `Sqlite3` object was not unset yet, so it still exists. It would have been another error then.

## Example

```php
<?php

// Not yet initialized object
$sqlite3 = new class (':memory:') extends Sqlite3 {
    function __construct() {}
};
$sqlite3->query('SELECT 1'); // OK

// already closed object
$sqlite3 = new Sqlite3(':memory:');
$sqlite3->query('SELECT 1'); // OK
$sqlite3->close();
$sqlite3->query('SELECT 1'); // Not OK

?>
```

## Alternatives
+ Check that the parent class of an extended Sqlite3 class is actually called.
+ Check that the parent class was not already destroyed.
+ Check that whole object is destroyed, not just the parent class.

## Related error messages
+ [call-to-a-member-function-%s()-on-%s](call-to-a-member-function-%s\(\)-on-%s.html)
+ [%s():-return-value-of-the-authorizer-callback-must-be-of-type-int,-%s-returned](%s\(\):-return-value-of-the-authorizer-callback-must-be-of-type-int,-%s-returned.html)
+ [%s():-return-value-of-the-collation-callback-must-be-of-type-int,-%s-returned](%s\(\):-return-value-of-the-collation-callback-must-be-of-type-int,-%s-returned.html)
+ [cannot-directly-construct-directory,-use-dir()-instead](cannot-directly-construct-directory,-use-dir\(\)-instead.html)
+ [datetimezone-object-is-unconstructed](datetimezone-object-is-unconstructed.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()