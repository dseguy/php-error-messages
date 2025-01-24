.. _type-declaration-'%s'-must-be-unqualified:

Type declaration '%s' must be unqualified
-----------------------------------------
 
.. meta::
	:description:
		Type declaration '%s' must be unqualified: Scalar types are absolute, and shall not be written with the initial ``\``.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Type declaration &#039;%s&#039; must be unqualified
	:og:description: Scalar types are absolute, and shall not be written with the initial ``\``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/type-declaration-%27%25s%27-must-be-unqualified.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Type declaration '%s' must be unqualified
	:twitter:description: Type declaration '%s' must be unqualified: Scalar types are absolute, and shall not be written with the initial ``\``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/type-declaration-'%s'-must-be-unqualified.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/type-declaration-'%s'-must-be-unqualified.html","name":"Type declaration '%s' must be unqualified","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 12 Jan 2025 09:40:58 +0000","dateModified":"Sun, 12 Jan 2025 09:40:58 +0000","description":"Scalar types are absolute, and shall not be written with the initial ``\\``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/type-declaration-'%s'-must-be-unqualified.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Scalar types are absolute, and shall not be written with the initial ``\``. It is always omitted. 

This error is reported for ``string``, ``int``, ``bool``, ``iterable``, ``never``, ``void``, ``object``, ``float``, ``null``, ``mixed``, ``true``, ``false``.

For some reason, ``array`` and ``callable`` are still not reported with this error. ``resource`` is also ignored, although it is only reserved, and not supported anyway.


Example
_______

.. code-block:: php

   <?php
   
   function foo(\string $x) {}
   
   ?>


Literal Examples
****************
+ Type declaration 'array' must be unqualified
+ Type declaration 'string' must be unqualified
+ Type declaration 'int' must be unqualified
+ Type declaration 'null' must be unqualified

Solutions
_________

+ Remove the leading backslash.
+ Remove the whole type.
+ Use a class type, which supports the leading backaslash.

Related Error Messages
______________________

+ :ref:`'namespace\%s'-is-an-invalid-class-name`
+ :ref:`is-an-invalid-class-name`
+ :ref:`'\%s'-is-an-invalid-class-name`
