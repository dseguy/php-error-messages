# Cannot use the final modifier on an abstract class

## Description
The options `final` and `abstract` are mutually exclusive. The first one prevents any redefinition by children, while the second one requests an implementation, and as such, a redefinition, in children classes.

It is the same message, whatever the order of the options.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-the-final-modifier-on-an-abstract-class.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-the-final-modifier-on-an-abstract-class.html","name":"Cannot use the final modifier on an abstract class","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The options ``final`` and ``abstract`` are mutually exclusive","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-the-final-modifier-on-an-abstract-class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

final abstract class X {}

abstract final class Z {}

?>
```

## Alternatives
+ Drop the ``abstract`` option.
+ Drop the ``final`` option.
+ Drop both the options.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()