# Bad class name in the catch statement

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/bad-class-name-in-the-catch-statement.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/bad-class-name-in-the-catch-statement.html","name":"Bad class name in the catch statement","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 27 Jul 2026 16:18:02 +0000","dateModified":"Mon, 27 Jul 2026 16:18:02 +0000","description":"A ``catch`` clause lists one or more class or interface names (possibly joined with ``|``) that the caught exception must match","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/bad-class-name-in-the-catch-statement.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A `catch` clause lists one or more class or interface names (possibly joined with `|`) that the caught exception must match. Those names have to be resolvable to a concrete class at compile time.

The pseudo-class `static` refers to `the class the method was actually called on`, which is only known at runtime, not at compile time. Since PHP needs to know the exact catch types while compiling the `try`/`catch` block, `static` cannot be used there, even though it is otherwise allowed as a return type or inside the method body.

## Example

```php
<?php

class Test
{
    public function method()
    {
        try {
            foo();
        } catch (static $e) {
        }
    }
}

?>
```

## Literal Examples
+ Bad class name in the catch statement

## Alternatives
+ Use the real class name instead of ``static``.
+ Use ``self`` if the intent is to catch the class in which the method is defined.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()