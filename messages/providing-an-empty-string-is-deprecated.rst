.. _providing-an-empty-string-is-deprecated:

Providing an empty string is deprecated
---------------------------------------
 
.. meta::
	:description:
		Providing an empty string is deprecated: Calling ``ord()`` with an empty string is like calling it without an argument: it has nothing to work on.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Providing an empty string is deprecated
	:og:description: Calling ``ord()`` with an empty string is like calling it without an argument: it has nothing to work on
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/providing-an-empty-string-is-deprecated.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Providing an empty string is deprecated
	:twitter:description: Providing an empty string is deprecated: Calling ``ord()`` with an empty string is like calling it without an argument: it has nothing to work on
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/providing-an-empty-string-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/providing-an-empty-string-is-deprecated.html","name":"Providing an empty string is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 26 May 2026 10:26:35 +0000","dateModified":"Tue, 26 May 2026 10:26:35 +0000","description":"Calling ``ord()`` with an empty string is like calling it without an argument: it has nothing to work on","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/providing-an-empty-string-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Calling ``ord()`` with an empty string is like calling it without an argument: it has nothing to work on.

Example
_______

.. code-block:: php

   <?php
   
       ord('');
   
   ?>

Solutions
_________

+ Remove the call ord() on empty string.
+ Check that the length of the string passed to ord() is 1.
+ Ensure that the string is in latin1 encoding: multi-byte strings will also lead to an error.

Related Error Messages
______________________

+ :ref:`providing-a-string-that-is-not-one-byte-long-is-deprecated.-use-ord($str[0])-instead`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `emptyStringWithOrd <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/emptyStringWithOrd.html>`_.
