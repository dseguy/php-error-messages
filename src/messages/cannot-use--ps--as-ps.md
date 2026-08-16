# Cannot use \"%s\" as %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use--\"%s-\"-as-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use--\"%s-\"-as-%s.html","name":"Cannot use \\\"%s\\\" as %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 15:07:51 +0000","dateModified":"Tue, 04 Aug 2026 15:07:51 +0000","description":"This is the generic, truncated form of a family of errors PHP raises when a reserved word is used where an identifier for a class, interface, trait, enum, or type is expected","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use--\"%s-\"-as-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This is the generic, truncated form of a family of errors PHP raises when a reserved word is used where an identifier for a class, interface, trait, enum, or type is expected. The first `%s` is the reserved word as written by the user, the second `%s` describes the context (`class name`, `interface name`, `trait name`, `enum name`, `a type name`, etc.). The full runtime message continues with ` as it is reserved`.

The list of reserved words has grown over time: `bool`, `int`, `float`, `string`, `true`, `false`, `null`, `self`, `parent` and `static` since PHP 7.0; `void` and `iterable` since PHP 7.1; `object` since PHP 7.2; `mixed` since PHP 8.0; `never` since PHP 8.1. `array` and `callable` are also reserved for this purpose, although they cannot even reach the parser as identifiers, since they are proper tokens.

The same underlying check is also used, with a different second argument, when a reserved word is written with a leading backslash in a type declaration, such as `\array`.

## Example

```php
<?php

class Int {}
interface Void {}
trait Object {}
enum Iterable {}

?>
```

## Alternatives
+ Use another name; reserved words cannot be used as class, interface, trait, or enum names.
+ Check the exact list of reserved words for the PHP version being targeted.

## Related error messages
+ [cannot-use--"%s-"-as-%s-as-it-is-reserved](cannot-use--%s--as-%s-as-it-is-reserved.html)
+ [cannot-use-"%s"-as-a-type-name-as-it-is-reserved](cannot-use-%s-as-a-type-name-as-it-is-reserved.html)
+ [cannot-use-'mixed'-as-class-name-as-it-is-reserved](cannot-use-mixed-as-class-name-as-it-is-reserved.html)
+ [cannot-use-'never'-as-class-name-as-it-is-reserved](cannot-use-never-as-class-name-as-it-is-reserved.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()