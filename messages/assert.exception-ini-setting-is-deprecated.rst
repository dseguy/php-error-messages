.. _assert.exception-ini-setting-is-deprecated:

assert.exception INI setting is deprecated
------------------------------------------
 
.. meta::
	:description:
		assert.exception INI setting is deprecated: ``assert.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: assert.exception INI setting is deprecated
	:og:description: ``assert
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/assert.exception-ini-setting-is-deprecated.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: assert.exception INI setting is deprecated
	:twitter:description: assert.exception INI setting is deprecated: ``assert
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/assert.exception-ini-setting-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/assert.exception-ini-setting-is-deprecated.html","name":"assert.exception INI setting is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:54:14 +0000","dateModified":"Tue, 11 Aug 2026 20:54:14 +0000","description":"``assert","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/assert.exception-ini-setting-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``assert.exception`` controls whether a failed ``assert()`` throws an ``AssertionError`` (the default since PHP 7) or falls back to the legacy behavior of emitting a warning and continuing execution.

Disabling exceptions for assertions revives pre-PHP 7 behavior that is inconsistent with the rest of the language, where failures are normally reported through exceptions or errors. As part of the cleanup of the legacy ``assert.*`` configuration, this directive is now deprecated.

The deprecation notice is triggered whenever ``assert.exception`` is set to a falsy value, either in ``php.ini`` or through ``ini_set()``.

Example
_______

.. code-block:: php

   <?php
   
   ini_set('assert.exception', '0');
   
   ?>

Solutions
_________

+ Keep ``assert.exception`` enabled (the default) and catch ``AssertionError`` where a failed assertion needs to be handled instead of propagating.
+ Remove ``ini_set()``/``ini_get()`` calls involving ``assert.exception`` from the code.

Related Error Messages
______________________

+ :ref:`assert.active-ini-setting-is-deprecated`
+ :ref:`assert.bail-ini-setting-is-deprecated`
+ :ref:`assert.warning-ini-setting-is-deprecated`


In previous PHP versions, this error message used to be :ref:`assert.bail-ini-setting-is-deprecated`.


In more recent PHP versions, this error message is now :ref:`assert.warning-ini-setting-is-deprecated`.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `assert <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/assert.html>`_.
