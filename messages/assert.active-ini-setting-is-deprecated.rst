.. _assert.active-ini-setting-is-deprecated:

assert.active INI setting is deprecated
---------------------------------------
 
.. meta::
	:description:
		assert.active INI setting is deprecated: ``assert.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: assert.active INI setting is deprecated
	:og:description: ``assert
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/assert.active-ini-setting-is-deprecated.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: assert.active INI setting is deprecated
	:twitter:description: assert.active INI setting is deprecated: ``assert
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/assert.active-ini-setting-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/assert.active-ini-setting-is-deprecated.html","name":"assert.active INI setting is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:54:01 +0000","dateModified":"Tue, 11 Aug 2026 20:54:01 +0000","description":"``assert","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/assert.active-ini-setting-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``assert.active`` is a legacy INI directive that dates back to the pre-PHP 7 implementation of ``assert()``, where assertions could be toggled on or off at runtime through several ``assert.*`` INI settings.

Since PHP 7, assertion behavior is primarily controlled by the ``zend.assertions`` directive, which supports three modes: 1 (generate and execute code, development mode), 0 (generate code, but skip execution at runtime), and -1 (do not generate code, production mode). ``assert.active`` became redundant, only affecting whether ``assert()`` calls are executed at all, and is now deprecated.

The deprecation notice is triggered whenever ``assert.active`` is set to a falsy value, either in ``php.ini`` or through ``ini_set()``.

Example
_______

.. code-block:: php

   <?php
   
   ini_set('assert.active', '0');
   
   ?>

Solutions
_________

+ Use the ``zend.assertions`` directive to control whether assertions are compiled and executed.
+ Remove ``ini_set()``/``ini_get()`` calls involving ``assert.active`` from the code.

Related Error Messages
______________________

+ :ref:`assert.bail-ini-setting-is-deprecated`
+ :ref:`assert.exception-ini-setting-is-deprecated`
+ :ref:`assert.warning-ini-setting-is-deprecated`


In more recent PHP versions, this error message is now :ref:`assert.bail-ini-setting-is-deprecated`.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `assert <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/assert.html>`_.
