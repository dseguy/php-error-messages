# The \"yield\" expression can only be used inside a function

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the--\"yield-\"-expression-can-only-be-used-inside-a-function.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the--\"yield-\"-expression-can-only-be-used-inside-a-function.html","name":"The \\\"yield\\\" expression can only be used inside a function","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 14:22:12 +0000","dateModified":"Tue, 04 Aug 2026 14:22:12 +0000","description":"``yield`` is what turns a function into a generator: it can only appear inside a function body (a named function, a method, a closure, or an arrow function)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the--\"yield-\"-expression-can-only-be-used-inside-a-function.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`yield` is what turns a function into a generator: it can only appear inside a function body (a named function, a method, a closure, or an arrow function). Using it directly in the top-level script code -- outside of any function -- is meaningless, since there is no generator for it to belong to, and PHP rejects it at compile time.

The same error is raised for any `yield` (or `yield from`) written at the top level of an included or required file, as long as it is not nested inside a function definition there.

## Example

```php
<?php

yield 1;

?>
```

## Alternatives
+ Wrap the code that needs to yield values inside a generator function, and call that function instead.
+ Remove the yield statement if it was left over by mistake.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()