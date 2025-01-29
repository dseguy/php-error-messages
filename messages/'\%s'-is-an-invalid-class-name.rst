.. _'\%s'-is-an-invalid-class-name:

'\%s' is an invalid class name
------------------------------
 
.. meta::
	:description:
		'\%s' is an invalid class name: ``self`` describes the current class.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: &#039;\%s&#039; is an invalid class name
	:og:description: ``self`` describes the current class
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%27%5C%25s%27-is-an-invalid-class-name.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: '\%s' is an invalid class name
	:twitter:description: '\%s' is an invalid class name: ``self`` describes the current class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/'\\%s'-is-an-invalid-class-name.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/'\\%s'-is-an-invalid-class-name.html","name":"'\\%s' is an invalid class name","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 29 Jan 2025 09:42:23 +0000","dateModified":"Wed, 29 Jan 2025 09:42:23 +0000","description":"``self`` describes the current class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/'\\%s'-is-an-invalid-class-name.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``self`` describes the current class. It is a relative class name, as it has no literal value. 

As such, it doesn't have an absolute path version, such as ``\self``. Hence, the error emitted there.

This error is also emitted for ``static`` and ``parent``. 

It was possible to circumvent this check until PHP 8.1, with ``namespace\%s`` syntax, where ``namespace`` represents the current namespace.

Example
_______

.. code-block:: php

   <?php
   
   function foo(\self $a) {};
   
   function foo( $a) : \self {};
   
   class X {
       private \self $f;
       private \x $f2;
   }
   
   ?>


Literal Examples
****************
+ '\self' is an invalid class name
+ '\parent' is an invalid class name
+ '\static' is an invalid class name

Solutions
_________

+ Remove the initial backslash.
+ Use the literal name of the intended class.

Related Error Messages
______________________

+ :ref:`type-declaration-'%s'-must-be-unqualified`
+ :ref:`'namespace\%s'-is-an-invalid-class-name`
