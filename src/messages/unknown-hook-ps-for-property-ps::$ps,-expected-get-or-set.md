# Unknown hook "%s" for property %s::$%s, expected "get" or "set"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unknown-hook-ps-for-property-ps::$ps,-expected-get-or-set.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unknown-hook-ps-for-property-ps::$ps,-expected-get-or-set.html","name":"Unknown hook \"%s\" for property %s::$%s, expected \"get\" or \"set\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:47+00:00","dateModified":"2026-03-31T09:10:47+00:00","description":"Property hooks can only be named 'get' or 'set', as of PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unknown-hook-ps-for-property-ps::$ps,-expected-get-or-set.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Property hooks can only be named 'get' or 'set', as of PHP 8.4. In the future, there may be new ones, but not in that version. Also, case is not important.

## Example

```php
<?php

class X
{
    public string $property {
        got {
            $this->name = $value;
        }
    }
}

?>
```

## Literal Examples
+ Unknown hook "got" for property X::$property, expected "get" or "set"

## Alternatives
+ Use 'set' or 'get' as the name of the hook.
+ Wait for a future version of PHP.
