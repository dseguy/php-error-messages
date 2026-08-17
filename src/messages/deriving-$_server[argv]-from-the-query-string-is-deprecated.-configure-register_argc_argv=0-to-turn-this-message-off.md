# Deriving $_SERVER['argv'] from the query string is deprecated. Configure register_argc_argv=0 to turn this message off

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/deriving-$_server[argv]-from-the-query-string-is-deprecated.-configure-register_argc_argv=0-to-turn-this-message-off.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/deriving-$_server[argv]-from-the-query-string-is-deprecated.-configure-register_argc_argv=0-to-turn-this-message-off.html","name":"Deriving $_SERVER['argv'] from the query string is deprecated. Configure register_argc_argv=0 to turn this message off","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-07-17T22:59:23+02:00","dateModified":"2026-07-17T22:59:23+02:00","description":"When the ``register_argc_argv`` INI directive is enabled and PHP is running under a non-CLI SAPI (such as CGI\/FastCGI), ``$_SERVER['argv']`` and ``$_SERVER['argc']`` used to be reconstructed from the raw query string, splitting it on ``+`` the same way a shell would split command-line arguments","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/deriving-$_server[argv]-from-the-query-string-is-deprecated.-configure-register_argc_argv=0-to-turn-this-message-off.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
When the `register_argc_argv` INI directive is enabled and PHP is running under a non-CLI SAPI (such as CGI/FastCGI), `$_SERVER['argv']` and `$_SERVER['argc']` used to be reconstructed from the raw query string, splitting it on `+` the same way a shell would split command-line arguments. This behaviour only makes sense for the CLI SAPI, where a real argument vector exists, and is now deprecated for every other SAPI.

To reproduce this message, run a script under the CGI SAPI with a non-empty query string, for instance: `php-cgi -d register_argc_argv=1` with `QUERY_STRING=foo=bar` set in the environment, the way a web server would when forwarding a request.

## Example

```php
<?php

    var_dump($_SERVER['argv']);

?>
```

## Alternatives
+ Set ``register_argc_argv=0`` in php.ini to silence the message; ``$_SERVER['argv']`` will simply not be populated outside of the CLI SAPI.
+ Use ``$_GET`` to read individual query string parameters instead of parsing ``$_SERVER['argv']``.
+ Use ``$_SERVER['QUERY_STRING']`` if the raw, unparsed query string is needed.

## Related error messages
+ [register_argc_argv](https://www.php.net/manual/en/ini.core.php#ini.register-argc-argv)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[register_argc_argv](register_argc_argv)