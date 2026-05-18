.. _jit-is-incompatible-with-third-party-extensions-that-override-zend_execute_ex().-jit-disabled.:

JIT is incompatible with third party extensions that override zend_execute_ex(). JIT disabled.
----------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		JIT is incompatible with third party extensions that override zend_execute_ex(). JIT disabled.: The root cause is that PHP&#039;s JIT has a fundamental incompatibility with extensions that override the engine&#039;s core execution handler ``zend_execute_ex()``.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: JIT is incompatible with third party extensions that override zend_execute_ex(). JIT disabled.
	:og:description: The root cause is that PHP&#039;s JIT has a fundamental incompatibility with extensions that override the engine&#039;s core execution handler ``zend_execute_ex()``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/jit-is-incompatible-with-third-party-extensions-that-override-zend_execute_ex%28%29.-jit-disabled..html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: JIT is incompatible with third party extensions that override zend_execute_ex(). JIT disabled.
	:twitter:description: JIT is incompatible with third party extensions that override zend_execute_ex(). JIT disabled.: The root cause is that PHP's JIT has a fundamental incompatibility with extensions that override the engine's core execution handler ``zend_execute_ex()``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/jit-is-incompatible-with-third-party-extensions-that-override-zend_execute_ex().-jit-disabled..html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/jit-is-incompatible-with-third-party-extensions-that-override-zend_execute_ex().-jit-disabled..html","name":"JIT is incompatible with third party extensions that override zend_execute_ex(). JIT disabled.","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 12 May 2026 10:28:36 +0000","dateModified":"Tue, 12 May 2026 10:28:36 +0000","description":"The root cause is that PHP's JIT has a fundamental incompatibility with extensions that override the engine's core execution handler ``zend_execute_ex()``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/jit-is-incompatible-with-third-party-extensions-that-override-zend_execute_ex().-jit-disabled..html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The root cause is that PHP's JIT has a fundamental incompatibility with extensions that override the engine's core execution handler ``zend_execute_ex()``. 

When such an extension is loaded, PHP proactively disables JIT and shows that warning.

This issue goes far beyond just debuggers and coverage tools. Any extension that instruments code,  like profilers, APMs, and security modules, can trigger it.

+ Debuggers & Code Coverage: ``xdebug``, ``pcov``, ``xhprof``, ``pinba``, ``suhosin``
+ Performance & APM Tools: ``blackfire``, ``newrelic``, ``tideways_xhprof``, ``ddtrace``, ``solarwinds``
+ Security Modules: ``bt_security_notice``, ``bt_safe``, ``imunify360``
+ Async & Server Frameworks ``swoole``
+ PHP Internals & Testing (Zend DTrace, uopz (User Operations for Zend), Zend Observer API (older implementations))
+ Other APM & Instrumentation: ``skywalking``

Note: the list above is not exhaustive.

Example
_______

.. code-block:: php

   

Solutions
_________

+ Manage Development vs Production: for extensions that are meant for development, like ``xdebug`` and ``pcov``, the simplest solution is to only load them in your development environment, such as by using different ``php.ini`` files.
+ Check for Alternative APIs or Versions: the newer ``Zend Observer API`` is the most JIT-friendly method for instrumenting code. Modern versions of tools like ``newrelic`` may support JIT by using this API, so always consult an extension's latest documentation.
+ Consult Vendor Docs: many vendors provide specific JIT guidance. For instance, specific settings can be used to allow JIT to work with ``imunify360``.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
