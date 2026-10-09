# The filter.default ini setting is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-filter.default-ini-setting-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-filter.default-ini-setting-is-deprecated.html","name":"The filter.default ini setting is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-24T09:11:08+02:00","dateModified":"2026-09-24T09:11:08+02:00","description":"``filter","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-filter.default-ini-setting-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`filter.default` (with `filter.default_flags`) names a filter that PHP applies automatically to the `$_GET`, `$_POST`, `$_COOKIE`, `$_REQUEST` and `$_SERVER` superglobals themselves, as well as to `filter_input()` calls that don't specify their own filter. Its own default is `unsafe_raw` (no filtering), but changing it to anything else effectively resurrects a magic-quotes-like behaviour: input gets silently sanitized (or mangled) based on a global setting the code reading `$_GET`/`$_POST` may not even be aware of, which was one of the classic sources of subtle bugs and security issues in old PHP applications.

As of PHP 8.1, setting `filter.default` to anything other than `unsafe_raw` emits this deprecation notice at startup. The setting keeps working for now, but `filter.default` (and `filter.default_flags`) are expected to be removed in PHP 9.0.

## Example

```php
<?php

// filter.default is PHP_INI_SYSTEM|PHP_INI_PERDIR, so it cannot be
// changed at runtime with ini_set() -- only in php.ini, .user.ini,
// httpd.conf, or via -d on the command line, for example
//   php -d filter.default=int script.php
var_dump(ini_get('filter.default'));

?>
```

## Literal Examples
+ The filter.default ini setting is deprecated

## Alternatives
+ Leave filter.default at its default, unsafe_raw, and call filter_var()/filter_input() explicitly wherever input needs sanitizing or validating.
+ Search the codebase for any place relying on the implicit global filter and make the filtering explicit there instead.

## Related error messages
+ [PHP.Watch: filter.default deprecation](https://php.watch/versions/8.1/filter.default-filter.default_options-deprecated)
+ [filter_var manual](https://www.php.net/manual/en/function.filter-var.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()