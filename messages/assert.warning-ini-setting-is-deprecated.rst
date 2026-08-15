.. _assert.warning-ini-setting-is-deprecated:

assert.warning INI setting is deprecated
----------------------------------------
 
.. meta::
	:description:
		assert.warning INI setting is deprecated: ``assert.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: assert.warning INI setting is deprecated
	:og:description: ``assert
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/assert.warning-ini-setting-is-deprecated.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: assert.warning INI setting is deprecated
	:twitter:description: assert.warning INI setting is deprecated: ``assert
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/assert.warning-ini-setting-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/assert.warning-ini-setting-is-deprecated.html","name":"assert.warning INI setting is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:54:21 +0000","dateModified":"Tue, 11 Aug 2026 20:54:21 +0000","description":"``assert","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/assert.warning-ini-setting-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``assert.warning`` is a legacy INI directive that, when ``assert.exception`` is disabled, controls whether a failed ``assert()`` call emits an ``E_WARNING``. It is part of the pre-PHP 7 assertion configuration that predates ``AssertionError``.

Since this directive only has an effect together with the also-deprecated ``assert.exception``, and there is no equivalent replacement to keep emitting a custom warning message, it is now deprecated as well. Once removed in PHP 9, disabling it will no longer be possible.

The deprecation notice is triggered whenever ``assert.warning`` is set to a falsy value, either in ``php.ini`` or through ``ini_set()``.

Example
_______

.. code-block:: php

   <?php
   
   ini_set('assert.warning', '0');
   
   ?>

Solutions
_________

+ Rely on the ``AssertionError`` exception thrown by failed assertions instead of the legacy warning-based reporting.
+ Remove ``ini_set()``/``ini_get()`` calls involving ``assert.warning`` from the code.

Related Error Messages
______________________

+ :ref:`assert.active-ini-setting-is-deprecated`
+ :ref:`assert.bail-ini-setting-is-deprecated`
+ :ref:`assert.exception-ini-setting-is-deprecated`


In previous PHP versions, this error message used to be :ref:`assert.exception-ini-setting-is-deprecated`.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `assert <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/assert.html>`_.
