.. _must-be-a-valid-method-name:

must be a valid method name
---------------------------
 
.. meta::
	:description:
		must be a valid method name: The ReflectionMethod requires a method name to be instantiated.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: must be a valid method name
	:og:description: The ReflectionMethod requires a method name to be instantiated
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/must-be-a-valid-method-name.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: must be a valid method name
	:twitter:description: must be a valid method name: The ReflectionMethod requires a method name to be instantiated
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/must-be-a-valid-method-name.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/must-be-a-valid-method-name.html","name":"must be a valid method name","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"The ReflectionMethod requires a method name to be instantiated","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/must-be-a-valid-method-name.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ReflectionMethod requires a method name to be instantiated. It is recommended to specify it with 2 arguments, the first being the class, or one of its objects, and the second being the method name. 

When only one argument is provided, the string must have the ``class::method`` format.

Example
_______

.. code-block:: php

   <?php
   
   $method = new ReflectionMethod('c');
   
   ?>

Solutions
_________

+ Use two arguments to call this method.
+ Use the correct format to reprsent a method in a string.

Related Error Messages
______________________

+ :ref:`cannot-be-null-when-argument-#1-($objectormethod)-is-an-object`
