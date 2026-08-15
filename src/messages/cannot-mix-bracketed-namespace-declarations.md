# Cannot mix bracketed namespace declarations

## Description
PHP supports two syntaxes to declare a namespace: the unbracketed form, `namespace Foo;`, which applies to the rest of the file (or until the next `namespace` statement), and the bracketed form, `namespace Foo { ... }`, which delimits the namespace explicitly.

A single file must consistently use one form or the other; mixing bracketed and unbracketed declarations together is not allowed. The full message reads: `Cannot mix bracketed namespace declarations with unbracketed namespace declarations`.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-mix-bracketed-namespace-declarations.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-mix-bracketed-namespace-declarations.html","name":"Cannot mix bracketed namespace declarations","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 26 Jul 2026 06:01:32 +0000","dateModified":"Sun, 26 Jul 2026 06:01:32 +0000","description":"PHP supports two syntaxes to declare a namespace: the unbracketed form, ``namespace Foo","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-mix-bracketed-namespace-declarations.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

namespace A {
    // bracketed syntax
}

namespace B;
// unbracketed syntax, in the same file

?>
```

## Alternatives
+ Convert every ``namespace`` statement in the file to the bracketed form.
+ Convert every ``namespace`` statement in the file to the unbracketed form.
+ Split the file so that each file only uses one of the two forms.

## Related error messages
+ [namespace-declarations-cannot-be-nested](asdf)
+ [no-code-may-exist-outside-of-namespace-{}](asdf)
+ [namespace-declaration-statement-has-to-be](asdf)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()