.. _cannot-use-auto-global-as-lexical-variable:

Cannot use auto-global as lexical variable
------------------------------------------
 
.. meta::
	:description:
		Cannot use auto-global as lexical variable: A lexical variable is the variables used in the ``use`` part of a closure definition.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use auto-global as lexical variable
	:og:description: A lexical variable is the variables used in the ``use`` part of a closure definition
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-auto-global-as-lexical-variable.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use auto-global as lexical variable
	:twitter:description: Cannot use auto-global as lexical variable: A lexical variable is the variables used in the ``use`` part of a closure definition
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-auto-global-as-lexical-variable.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-auto-global-as-lexical-variable.html","name":"Cannot use auto-global as lexical variable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 15 Jan 2026 16:17:03 +0000","dateModified":"Thu, 15 Jan 2026 16:17:03 +0000","description":"A lexical variable is the variables used in the ``use`` part of a closure definition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-auto-global-as-lexical-variable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A lexical variable is the variables used in the ``use`` part of a closure definition. These variable will be imported in the closure. In this case, the variable is an auto-global variable, which is included in every context, so this is useless.

Example
_______

.. code-block:: php

   <?php
   
   function () use ($_POST) {
       
   };
   
   ?>

Solutions
_________

+ Remove the auto-global from the list of imported variable (in the use clause).
+ Remove the use clause, if that variable is there alone.

Related Error Messages
______________________

+ :ref:`cannot-re-assign-$this`
+ :ref:`cannot-re-assign-auto-global-variable-%s`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
