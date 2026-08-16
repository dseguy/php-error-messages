# Cannot declare hooks for static property

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-declare-hooks-for-static-property.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-declare-hooks-for-static-property.html","name":"Cannot declare hooks for static property","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"Static properties are not supported for property hooks","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-declare-hooks-for-static-property.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Static properties are not supported for property hooks. Property hooks are only for non-static methods.

## Example

```php
<?php

class X
{
    public static string $property {
        set => $this->property . _1;

        SET {
            $this->property = $value;
        }
    }
}
?>
```

## Alternatives
+ Make the property non-static.
+ Create accessors for the static property.
