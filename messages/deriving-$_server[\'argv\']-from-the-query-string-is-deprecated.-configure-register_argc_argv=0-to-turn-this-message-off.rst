.. _deriving-\$_server[\'argv\']-from-the-query-string-is-deprecated.-configure-register_argc_argv=0-to-turn-this-message-off:

Deriving $_SERVER[\'argv\'] from the query string is deprecated. Configure register_argc_argv=0 to turn this message off
------------------------------------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		Deriving $_SERVER[\'argv\'] from the query string is deprecated. Configure register_argc_argv=0 to turn this message off: When the ``register_argc_argv`` INI directive is enabled and PHP is running under a non-CLI SAPI (such as CGI/FastCGI), ``$_SERVER[&#039;argv&#039;]`` and ``$_SERVER[&#039;argc&#039;]`` used to be reconstructed from the raw query string, splitting it on ``+`` the same way a shell would split command-line arguments.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Deriving $_SERVER[\&#039;argv\&#039;] from the query string is deprecated. Configure register_argc_argv=0 to turn this message off
	:og:description: When the ``register_argc_argv`` INI directive is enabled and PHP is running under a non-CLI SAPI (such as CGI/FastCGI), ``$_SERVER[&#039;argv&#039;]`` and ``$_SERVER[&#039;argc&#039;]`` used to be reconstructed from the raw query string, splitting it on ``+`` the same way a shell would split command-line arguments
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/deriving-%24_server%5B%27argv%27%5D-from-the-query-string-is-deprecated.-configure-register_argc_argv%3D0-to-turn-this-message-off.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Deriving $_SERVER[\'argv\'] from the query string is deprecated. Configure register_argc_argv=0 to turn this message off
	:twitter:description: Deriving $_SERVER[\'argv\'] from the query string is deprecated. Configure register_argc_argv=0 to turn this message off: When the ``register_argc_argv`` INI directive is enabled and PHP is running under a non-CLI SAPI (such as CGI/FastCGI), ``$_SERVER['argv']`` and ``$_SERVER['argc']`` used to be reconstructed from the raw query string, splitting it on ``+`` the same way a shell would split command-line arguments
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/deriving-$_server[\\'argv\\']-from-the-query-string-is-deprecated.-configure-register_argc_argv=0-to-turn-this-message-off.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/deriving-$_server[\\'argv\\']-from-the-query-string-is-deprecated.-configure-register_argc_argv=0-to-turn-this-message-off.html","name":"Deriving $_SERVER[\\'argv\\'] from the query string is deprecated. Configure register_argc_argv=0 to turn this message off","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 08:12:47 +0000","dateModified":"Wed, 15 Jul 2026 08:12:47 +0000","description":"When the ``register_argc_argv`` INI directive is enabled and PHP is running under a non-CLI SAPI (such as CGI\/FastCGI), ``$_SERVER['argv']`` and ``$_SERVER['argc']`` used to be reconstructed from the raw query string, splitting it on ``+`` the same way a shell would split command-line arguments","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/deriving-$_server[\\'argv\\']-from-the-query-string-is-deprecated.-configure-register_argc_argv=0-to-turn-this-message-off.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When the ``register_argc_argv`` INI directive is enabled and PHP is running under a non-CLI SAPI (such as CGI/FastCGI), ``$_SERVER['argv']`` and ``$_SERVER['argc']`` used to be reconstructed from the raw query string, splitting it on ``+`` the same way a shell would split command-line arguments. This behaviour only makes sense for the CLI SAPI, where a real argument vector exists, and is now deprecated for every other SAPI.

To reproduce this message, run a script under the CGI SAPI with a non-empty query string, for instance: ``php-cgi -d register_argc_argv=1`` with ``QUERY_STRING=foo=bar`` set in the environment, the way a web server would when forwarding a request.

Example
_______

.. code-block:: php

   <?php
   
   var_dump($_SERVER['argv']);
   
   ?>

Solutions
_________

+ Set ``register_argc_argv=0`` in php.ini to silence the message; ``$_SERVER['argv']`` will simply not be populated outside of the CLI SAPI.
+ Use ``$_GET`` to read individual query string parameters instead of parsing ``$_SERVER['argv']``.
+ Use ``$_SERVER['QUERY_STRING']`` if the raw, unparsed query string is needed.

See Also
________

+ `register_argc_argv <https://www.php.net/manual/en/ini.core.php#ini.register-argc-argv>`_

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `register_argc_argv <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/register_argc_argv.html>`_.
