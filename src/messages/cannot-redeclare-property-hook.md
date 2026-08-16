# Cannot redeclare property hook

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redeclare-property-hook.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redeclare-property-hook.html","name":"Cannot redeclare property hook","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-09-26T09:24:47+02:00","dateModified":"2026-07-24T19:28:38+02:00","description":"Property hooks must be all distinct, and there can only be two","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redeclare-property-hook.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Property hooks must be all distinct, and there can only be two. In that case, it is `get` and `set`. Property hooks are case insensitive, so `get` and `GET` are the same. 

They also differ one from the other by one letter, so review is important.

## Example

```php
<?php

class X
{
    public string $property {
        set => $this->property . _1;

        SET {
            $this->property = $value;
        }
    }
}
?>
```

## Alternatives
+ Make sure that both hooks are needed.
+ Remove any third hook: there can only be two, at most.
+ Check case of the hooks name.

## Related error messages
+ [%s-and-%s-define-the-same-hooked-property-($%s)-in-the-composition-of-%s.-conflict-resolution-between-hooked-properties-is-currently-not-supported.-class-was-composed](%s-and-%s-define-the-same-hooked-property-\($%s\)-in-the-composition-of-%s.-conflict-resolution-between-hooked-properties-is-currently-not-supported.-class-was-composed.html)
