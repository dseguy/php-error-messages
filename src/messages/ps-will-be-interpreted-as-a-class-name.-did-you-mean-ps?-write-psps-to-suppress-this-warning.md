# "%s" will be interpreted as a class name. Did you mean "%s"? Write "\%s"%s to suppress this warning

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s\"-will-be-interpreted-as-a-class-name.-did-you-mean-\"%s\"?-write-\"%s\"%s-to-suppress-this-warning.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s\"-will-be-interpreted-as-a-class-name.-did-you-mean-\"%s\"?-write-\"%s\"%s-to-suppress-this-warning.html","name":"\"%s\" will be interpreted as a class name. Did you mean \"%s\"? Write \"\\%s\"%s to suppress this warning","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:45+00:00","dateModified":"2026-03-31T09:10:45+00:00","description":"PHP offers several native type, such as ``bool`` or ``int``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s\"-will-be-interpreted-as-a-class-name.-did-you-mean-\"%s\"?-write-\"%s\"%s-to-suppress-this-warning.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP offers several native type, such as `bool` or `int`. These names may also be confused with `boolean` and `integer`, which are not PHP native types. They are valid for custom code usage, including creating classes or interfaces. To avoid such confusion, PHP emits this error message to make sure that `integer` is confused with `int`.

`boolean`, for `bool`, `integer`, for `int`, `double`, for `float`, and `resource`, for `\resource`, are all subjects to this error.

## Example

```php
<?php

function foo() : boolean {} 

?>
```

## Literal Examples
+ "boolean" will be interpreted as a class name. Did you mean "bool"? Write "\boolean" to suppress this warning
+ "resource" will be interpreted as a class name. Did you mean "\resource"?

## Alternatives
+ Use the PHP native type.
+ Create a ``use`` statement for the actual type.
+ Add the initial ``\`` with this name.
