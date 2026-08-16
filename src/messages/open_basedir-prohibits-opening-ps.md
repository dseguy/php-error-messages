# open_basedir prohibits opening %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/open_basedir-prohibits-opening-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/open_basedir-prohibits-opening-%s.html","name":"open_basedir prohibits opening %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"``open_basedir`` is a PHP directive which limits access of the inclusion functions, such as ``include`` and ``require``, to include files which are outside the path specified with ``open_basedir``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/open_basedir-prohibits-opening-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`open_basedir` is a PHP directive which limits access of the inclusion functions, such as `include` and `require`, to include files which are outside the path specified with `open_basedir`.

## Example

```php
<?php

include '/private/folder/secret.php';

?>
```

## Alternatives
+ Update the ``open_basedir`` directive to allow access to the file.
+ Update the inclusion path to target a file that falls within the paths in the ``open_basedir`` directive.

## Related error messages
+ [failed-opening-required-%s-(include_path=%s)](failed-opening-required-%s-\(include\_path=%s\).html)
+ [open_basedir-restriction-in-effect.-file(%s)-is-not-within-the-allowed-path(s):-(%s)](open\_basedir-restriction-in-effect.-file\(%s\)-is-not-within-the-allowed-path\(s\):-\(%s\).html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()