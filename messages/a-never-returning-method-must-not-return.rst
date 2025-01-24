.. _a-never-returning-method-must-not-return:

A never-returning method must not return
----------------------------------------
 
.. meta::
	:description:
		A never-returning method must not return: When using the ``never`` keyword, the method shall not use the ``return`` keyword.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: A never-returning method must not return
	:og:description: When using the ``never`` keyword, the method shall not use the ``return`` keyword
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/a-never-returning-method-must-not-return.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: A never-returning method must not return
	:twitter:description: A never-returning method must not return: When using the ``never`` keyword, the method shall not use the ``return`` keyword
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/a-never-returning-method-must-not-return.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/a-never-returning-method-must-not-return.html","name":"A never-returning method must not return","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jan 2025 17:45:24 +0000","dateModified":"Tue, 07 Jan 2025 17:45:24 +0000","description":"When using the ``never`` keyword, the method shall not use the ``return`` keyword","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/a-never-returning-method-must-not-return.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When using the ``never`` keyword, the method shall not use the ``return`` keyword. ``never`` means that the method will not return, but rather ``die``, throw an exception, or trigger an error.

Also note that ``never`` cannot be used in a union type.

This error message applies to methods, since PHP 8.4. Before that vesrion, a unified message mentioning functions applied to all structures. 


Example
_______

.. code-block:: php

   <?php
   
   class X {
   	function foo() : never {
   		return true;
   	}
   }
   
   ?>

Solutions
_________

+ Remove the ``return`` keyword in the body of the method.
+ Change the ``never`` return type to another type.

Related Error Messages
______________________

+ :ref:`a-never-returning-function-must-not-return`
