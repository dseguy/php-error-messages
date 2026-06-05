.. _cannot-use-the-static-modifier-on-a-parameter:

Cannot use the static modifier on a parameter
---------------------------------------------
 
.. meta::
	:description:
		Cannot use the static modifier on a parameter: It is not possible to use ``static`` as a type for a parameter.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use the static modifier on a parameter
	:og:description: It is not possible to use ``static`` as a type for a parameter
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-the-static-modifier-on-a-parameter.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use the static modifier on a parameter
	:twitter:description: Cannot use the static modifier on a parameter: It is not possible to use ``static`` as a type for a parameter
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-the-static-modifier-on-a-parameter.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-the-static-modifier-on-a-parameter.html","name":"Cannot use the static modifier on a parameter","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 29 May 2026 14:41:15 +0000","dateModified":"Fri, 29 May 2026 14:41:15 +0000","description":"It is not possible to use ``static`` as a type for a parameter","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-the-static-modifier-on-a-parameter.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
It is not possible to use ``static`` as a type for a parameter. It is possible for a return value, but not for parameters, not properties.

Example
_______

.. code-block:: php

   <?php
   
       class X {
           function foo(static $argument) {
           
           }
       }
   
   ?>

Solutions
_________

+ Use self pseudo-type.
+ Use the name of the class as type.
+ Use one of the interface as type.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
