.. _assert.callback-ini-setting-is-deprecated:

assert.callback INI setting is deprecated
-----------------------------------------
 
.. meta::
	:description:
		assert.callback INI setting is deprecated: The ``php.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: assert.callback INI setting is deprecated
	:og:description: The ``php
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/assert.callback-ini-setting-is-deprecated.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: assert.callback INI setting is deprecated
	:twitter:description: assert.callback INI setting is deprecated: The ``php
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/assert.callback-ini-setting-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/assert.callback-ini-setting-is-deprecated.html","name":"assert.callback INI setting is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 17 Sep 2025 17:11:23 +0000","dateModified":"Wed, 17 Sep 2025 17:11:23 +0000","description":"The ``php","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/assert.callback-ini-setting-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``php.ini`` directive ``assert.callback`` is deprecated, alongside several features from the assert functions. It should not be set anymore in the code.

Note that a call to ``ini_get()`` will not generate the warning: only the ``ini_set()``.

Example
_______

.. code-block:: php

   <?php
   
   ini_set('assert.callback', 1);
   
   ?>

Solutions
_________

+ Remove the call to ``assert.callback`` and its dependencies.
