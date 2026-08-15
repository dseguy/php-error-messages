# Anonymous class method %s() must not be abstract

## Description
An anonymous class cannot have an abstract method, as the class is actually immediately instantiate, while abstract class, and classes that contains an abstract method cannot be instantiated.

This error was also detected previously, with a more generic error message.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/anonymous-class-method-%s()-must-not-be-abstract.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/anonymous-class-method-%s()-must-not-be-abstract.html","name":"Anonymous class method %s() must not be abstract","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 24 Jul 2026 17:24:29 +0000","dateModified":"Fri, 24 Jul 2026 17:24:29 +0000","description":"An anonymous class cannot have an abstract method, as the class is actually immediately instantiate, while abstract class, and classes that contains an abstract method cannot be instantiated","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/anonymous-class-method-%s()-must-not-be-abstract.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

new class() {
    abstract function foo();
}

?>
```

## Literal Examples
+ Anonymous class method foo() must not be abstract

## Alternatives
+ Remove the abstract method.
+ Add a body to the abstract method, and remove the abstract option.

## Related error messages
+ [class-%s-contains-%d-abstract-method%s-and-must-therefore-be-declared-abstract-or-implement-the-remaining-methods](class-%s-contains-%d-abstract-method%s-and-must-therefore-be-declared-abstract-or-implement-the-remaining-methods.html)
+ [%s-%s-must-implement-%d-abstract-method%s-(](%s-%s-must-implement-%d-abstract-method%s-\(.html)
+ [%s-%s-contains-%d-abstract-method%s-and-must-therefore-be-declared-abstract-or-implement-the-remaining-method%s-(](%s-%s-contains-%d-abstract-method%s-and-must-therefore-be-declared-abstract-or-implement-the-remaining-method%s-\(.html)
+ [%s-method-%s::%s()-must-not-be-abstract](%s-method-%s::%s\(\)-must-not-be-abstract.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()