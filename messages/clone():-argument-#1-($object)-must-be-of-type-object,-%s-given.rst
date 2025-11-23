.. _clone():-argument-#1-(\$object)-must-be-of-type-object,-%s-given:

clone(): Argument #1 ($object) must be of type object, %s given
---------------------------------------------------------------
 
.. meta::
	:description:
		clone(): Argument #1 ($object) must be of type object, %s given: This is the error message when an attempt of cloning is made on an piece of data that is not an object.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: clone(): Argument #1 ($object) must be of type object, %s given
	:og:description: This is the error message when an attempt of cloning is made on an piece of data that is not an object
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/clone%28%29%3A-argument-%231-%28%24object%29-must-be-of-type-object%2C-%25s-given.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: clone(): Argument #1 ($object) must be of type object, %s given
	:twitter:description: clone(): Argument #1 ($object) must be of type object, %s given: This is the error message when an attempt of cloning is made on an piece of data that is not an object
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/clone():-argument-#1-($object)-must-be-of-type-object,-%s-given.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/clone():-argument-#1-($object)-must-be-of-type-object,-%s-given.html","name":"clone(): Argument #1 ($object) must be of type object, %s given","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Nov 2025 17:55:07 +0000","dateModified":"Wed, 19 Nov 2025 17:55:07 +0000","description":"This is the error message when an attempt of cloning is made on an piece of data that is not an object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/clone():-argument-#1-($object)-must-be-of-type-object,-%s-given.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This is the error message when an attempt of cloning is made on an piece of data that is not an object.

Example
_______

.. code-block:: php

   <?php
   
   clone(1);
   
   ?>


Literal Examples
****************
+ clone(): Argument #1 ($object) must be of type object, int given
+ clone(): Argument #1 ($object) must be of type object, string given
+ clone(): Argument #1 ($object) must be of type object, array given

Solutions
_________

+ Check that the cloned value is actually an object.


In previous PHP versions, this error message used to be :ref:`clone-method-called-on-non-object`.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
