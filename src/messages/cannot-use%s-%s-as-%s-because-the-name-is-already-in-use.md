# Cannot use%s %s as %s because the name is already in use

## Description
This error appears when a name, for class, interface, trait or enumeration was already used by a `use` command. This is usually a problem within the block that has the `use`.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use%s-%s-as-%s-because-the-name-is-already-in-use.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use%s-%s-as-%s-because-the-name-is-already-in-use.html","name":"Cannot use%s %s as %s because the name is already in use","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 17:45:45 +0000","dateModified":"Thu, 13 Aug 2026 17:45:45 +0000","description":"This error appears when a name, for class, interface, trait or enumeration was already used by a ``use`` command","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use%s-%s-as-%s-because-the-name-is-already-in-use.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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
