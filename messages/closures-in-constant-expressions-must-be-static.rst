.. _closures-in-constant-expressions-must-be-static:

Closures in constant expressions must be static
-----------------------------------------------
 
.. meta::
	:description:
		Closures in constant expressions must be static: When defining a closure as a constant value, there cannot be any context value that are imported.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Closures in constant expressions must be static
	:og:description: When defining a closure as a constant value, there cannot be any context value that are imported
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/closures-in-constant-expressions-must-be-static.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Closures in constant expressions must be static
	:twitter:description: Closures in constant expressions must be static: When defining a closure as a constant value, there cannot be any context value that are imported
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/closures-in-constant-expressions-must-be-static.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/closures-in-constant-expressions-must-be-static.html","name":"Closures in constant expressions must be static","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 07 Nov 2025 20:59:33 +0000","dateModified":"Fri, 07 Nov 2025 20:59:33 +0000","description":"When defining a closure as a constant value, there cannot be any context value that are imported","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/closures-in-constant-expressions-must-be-static.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When defining a closure as a constant value, there cannot be any context value that are imported. This includes the current object ``$this`` which is included by default in any closure. To avoid this, the ``static`` option must be added to the closure.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       const MY = function () { return 1;}
   }
   
   ?>

Solutions
_________

+ Add the static option to the closure.
+ Define the closure inside a method.

Related Error Messages
______________________

+ :ref:`cannot-use(...)-variables-in-constant-expression`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
