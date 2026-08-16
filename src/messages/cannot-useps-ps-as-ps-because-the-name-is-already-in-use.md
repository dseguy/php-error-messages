# Cannot use%s %s as %s because the name is already in use

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use%s-%s-as-%s-because-the-name-is-already-in-use.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use%s-%s-as-%s-because-the-name-is-already-in-use.html","name":"Cannot use%s %s as %s because the name is already in use","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-08-22T23:00:10+02:00","dateModified":"2026-08-15T17:29:36+02:00","description":"This error appears when a name, for class, interface, trait or enumeration was already used by a ``use`` command","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use%s-%s-as-%s-because-the-name-is-already-in-use.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error appears when a name, for class, interface, trait or enumeration was already used by a `use` command. This is usually a problem within the block that has the `use`.

## Example

```php
<?php

use X as Y;

class Y {}

?>
```

## Literal Examples
+ Cannot use X as Y because the name is already in use

## Alternatives
+ Use another name for the alias.
+ Use another name for the definition.

## Related error messages
+ [cannot-declare-const-%s-because](cannot-declare-const-%s-because.html)
