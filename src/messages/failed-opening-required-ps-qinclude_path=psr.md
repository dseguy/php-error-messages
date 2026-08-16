# Failed opening required %s (include_path=%s)

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/failed-opening-required-%s-(include_path=%s).html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/failed-opening-required-%s-(include_path=%s).html","name":"Failed opening required %s (include_path=%s)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"This error appears when PHP cannot reach the file for inclusion with ``require`` or ``require_once``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/failed-opening-required-%s-(include_path=%s).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error appears when PHP cannot reach the file for inclusion with `require` or `require_once`. 

The file may not exist, or the path has a typo and does not point to the actual file. Note that PHP searches for the file once, when the path starts with a leading `/`. Otherwise, PHP uses the provided path with all the paths provided in the `include_path`, and stops at the first found file. 

The file may be configured no read permissions, making it unavailable for the web server or anyone running the current code.

Parenthesis have no impact on this error.

This error applies only to `require` and `require_once`. It does not apply to `include` and `include_once`, which reports the same message but proceeds with execution and does not stop with a fatal error. Note that the underlying problem is the same, but the reaction of the inclusions are not the same.

## Example

```php
<?php

    require '/not/a/path/to/a/file.inc';

?>
```

## Literal Examples
+ Failed opening required include.php (include_path='.:')

## Alternatives
+ Check for typos in the file name.
+ Check for typos in the path name.
+ Check for permissions to reach the file.
+ Check for include_path to provide the correct path prefix.

## Related error messages
+ [open_basedir-prohibits-opening-%s](open\_basedir-prohibits-opening-%s.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()