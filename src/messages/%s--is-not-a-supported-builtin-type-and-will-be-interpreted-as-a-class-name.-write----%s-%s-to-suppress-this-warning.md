# %s\" is not a supported builtin type and will be interpreted as a class name. Write \"\\%s\"%s to suppress this warning

## Description
`resource` looks like it should be a builtin type, since it is one of the values returned by `gettype()`, but it was never turned into an actual type declaration: there is no way to name a specific kind of resource (file handle, curl handle...) in a type.

Since `resource` is not a reserved word, PHP does not reject it: it silently treats it as the name of a class or interface called `resource`, which almost never exists, and any call with an actual resource argument then fails with a TypeError.

To help catch the mistake, the compiler emits this warning as soon as it sees the bare word `resource` in a type position and no class or interface with that name has been imported: it assumes a builtin type was intended. The comparison is case-sensitive, so a capitalized `Resource` -- more plausible as a genuine class name -- does not trigger it.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-\"-is-not-a-supported-builtin-type-and-will-be-interpreted-as-a-class-name.-write--\"--%s-\"%s-to-suppress-this-warning.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-\"-is-not-a-supported-builtin-type-and-will-be-interpreted-as-a-class-name.-write--\"--%s-\"%s-to-suppress-this-warning.html","name":"%s\\\" is not a supported builtin type and will be interpreted as a class name. Write \\\"\\\\%s\\\"%s to suppress this warning","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 08:58:05 +0000","dateModified":"Thu, 06 Aug 2026 08:58:05 +0000","description":"``resource`` looks like it should be a builtin type, since it is one of the values returned by ``gettype()``, but it was never turned into an actual type declaration: there is no way to name a specific kind of resource (file handle, curl handle","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-\"-is-not-a-supported-builtin-type-and-will-be-interpreted-as-a-class-name.-write--\"--%s-\"%s-to-suppress-this-warning.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

function readFile(resource $handle): void {
    fclose($handle);
}

?>
```

## Literal Examples
+ "resource" is not a supported builtin type and will be interpreted as a class name. Write "\resource" to suppress this warning

## Alternatives
+ Remove the type declaration, or replace it with ``mixed``, since resources cannot be typed more precisely.
+ Prefix the name with a backslash, as in ``\resource``, to tell PHP that a class actually called ``resource`` is meant, which suppresses the warning.
+ If a class or interface named ``resource`` exists in the current namespace, import it with a ``use`` statement so PHP recognizes it, which also suppresses the warning.

## Related error messages
+ [%s-"-will-be-interpreted-as-a-class-name.-did-you-mean--"%s-"?-write--"--%s-"%s-to-suppress-this-warning](%s--will-be-interpreted-as-a-class-name.-did-you-mean--%s-?-write----%s-%s-to-suppress-this-warning.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()