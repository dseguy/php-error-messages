# %s\" will be interpreted as a class name. Did you mean \"%s\"? Write \"\\%s\"%s to suppress this warning

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/ps--will-be-interpreted-as-a-class-name.-did-you-mean--ps-%3F-write----ps-ps-to-suppress-this-warning.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/ps--will-be-interpreted-as-a-class-name.-did-you-mean--ps-%3F-write----ps-ps-to-suppress-this-warning.html","name":"%s\\\" will be interpreted as a class name. Did you mean \\\"%s\\\"? Write \\\"\\\\%s\\\"%s to suppress this warning","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-06T08:58:16+00:00","dateModified":"2026-08-06T08:58:16+00:00","description":"``boolean``, ``integer`` and ``double`` are the names PHP itself uses internally, and returns from ``gettype()``, for the ``bool``, ``int`` and ``float`` types","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/ps--will-be-interpreted-as-a-class-name.-did-you-mean--ps-%3F-write----ps-ps-to-suppress-this-warning.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`boolean`, `integer` and `double` are the names PHP itself uses internally, and returns from `gettype()`, for the `bool`, `int` and `float` types. They look like legitimate type names, but they were never made valid type declarations; only the short forms are.

Because none of these three words is reserved, PHP does not reject them in a type position: it treats the declaration as the name of a class or interface instead, one that essentially never exists, so any call passes a value of the intended scalar type and still fails with a TypeError.

To catch this common mistake, the compiler recognizes exactly these three words -- and only these three, compared case-sensitively, so `Boolean` or `INTEGER` are assumed to be genuine class names and do not trigger it -- and emits this warning, naming the short form that was probably intended. It only fires when no class or interface with that exact name has been imported in the current file.

## Example

```php
<?php

function toggle(boolean $flag): integer {
    return $flag ? 1 : 0;
}

?>
```

## Literal Examples
+ "boolean" will be interpreted as a class name. Did you mean "bool"? Write "\boolean" to suppress this warning
+ "integer" will be interpreted as a class name. Did you mean "int"? Write "\integer" to suppress this warning
+ "double" will be interpreted as a class name. Did you mean "float"? Write "\double" to suppress this warning

## Alternatives
+ Replace the alias with the actual scalar type: ``bool`` instead of ``boolean``, ``int`` instead of ``integer``, ``float`` instead of ``double``.
+ Prefix the name with a backslash, as in ``\boolean``, to tell PHP that a class actually called ``boolean`` is meant, which suppresses the warning.
+ If a class or interface with that exact name exists in the current namespace, import it with a ``use`` statement so PHP recognizes it, which also suppresses the warning.

## Related error messages
+ [%s-"-is-not-a-supported-builtin-type-and-will-be-interpreted-as-a-class-name.-write--"--%s-"%s-to-suppress-this-warning](%s--is-not-a-supported-builtin-type-and-will-be-interpreted-as-a-class-name.-write----%s-%s-to-suppress-this-warning.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()