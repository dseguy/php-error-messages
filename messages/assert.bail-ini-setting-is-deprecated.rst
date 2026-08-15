.. _assert.bail-ini-setting-is-deprecated:

assert.bail INI setting is deprecated
-------------------------------------
 
.. meta::
	:description:
		assert.bail INI setting is deprecated: ``assert.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: assert.bail INI setting is deprecated
	:og:description: ``assert
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/assert.bail-ini-setting-is-deprecated.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: assert.bail INI setting is deprecated
	:twitter:description: assert.bail INI setting is deprecated: ``assert
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/assert.bail-ini-setting-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/assert.bail-ini-setting-is-deprecated.html","name":"assert.bail INI setting is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:54:08 +0000","dateModified":"Tue, 11 Aug 2026 20:54:08 +0000","description":"``assert","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/assert.bail-ini-setting-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``assert.bail`` is a legacy INI directive from the pre-PHP 7 implementation of ``assert()``. When enabled, it terminated script execution as soon as a failed assertion was encountered, instead of letting the script continue.

This behavior is redundant with throwing an ``AssertionError`` (the default behavior since PHP 7 when ``assert.exception`` is enabled), which already interrupts execution unless the exception is caught. As part of the general cleanup of the legacy assertion configuration, ``assert.bail`` is now deprecated.

The deprecation notice is triggered whenever ``assert.bail`` is set to a truthy value, either in ``php.ini`` or through ``ini_set()``.

Example
_______

.. code-block:: php

   <?php
   
   ini_set('assert.bail', '1');
   
   ?>

Solutions
_________

+ Rely on the ``AssertionError`` exception thrown by failed assertions (controlled by ``assert.exception``) to stop execution, and catch it where appropriate.
+ Remove ``ini_set()``/``ini_get()`` calls involving ``assert.bail`` from the code.

Related Error Messages
______________________

+ :ref:`assert.active-ini-setting-is-deprecated`
+ :ref:`assert.exception-ini-setting-is-deprecated`
+ :ref:`assert.warning-ini-setting-is-deprecated`


In previous PHP versions, this error message used to be :ref:`assert.active-ini-setting-is-deprecated`.


In more recent PHP versions, this error message is now :ref:`assert.exception-ini-setting-is-deprecated`.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `assert <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/assert.html>`_.
