# Hooked properties cannot be readonly

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/hooked-properties-cannot-be-readonly.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/hooked-properties-cannot-be-readonly.html","name":"Hooked properties cannot be readonly","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The readonly keyword is not allowed on hooked properties","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/hooked-properties-cannot-be-readonly.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The readonly keyword is not allowed on hooked properties. On the other hand, it is possible to emulate that feature, by writing the `set` method.

## Example

```php
<?php

class X {
    public readonly string $x {
    	get => $this->x;
    	
    	set { if (!isset($this->x)) $this->x = $value;}
    }
}

?>
```

## Alternatives
+ Use the ``set`` hook to emulate readonly.
+ Omit the readonly keyword.
+ Remove the property hooks from the property definition.
