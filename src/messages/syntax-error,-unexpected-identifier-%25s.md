# syntax error, unexpected identifier "%s"

## Description
This error appears when two identifiers are following each other. This is usually rooted in a missing keyword or character.

Named structures usually start with a keyword, such as `class`, `interface`, `function`, etc. 

In a function call, a missing opening parenthesis brings the named parameter and the function name together.

The error also appears when new lines are used inside a namespace. This was valid until PHP 8.0, but is not anymore.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-identifier-\"%s\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-identifier-\"%s\".html","name":"syntax error, unexpected identifier \"%s\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"This error appears when two identifiers are following each other","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-identifier-\"%s\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

// missing keyword: class, or interface
A extends B {}

// missing opening parenthesis
foo name:1);

// new lines in namespace
echo \A
      B\ 
      C;

?>
```

## Literal Examples
+ syntax error, unexpected identifier "A"

## Alternatives
+ Add the missing keyword before the identifier.
+ Add a missing opening parenthesis to the function call.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[MultilineQualifiedName](MultilineQualifiedName)