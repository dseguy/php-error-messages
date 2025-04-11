.. _cannot-be-null-when-argument-#1-(\$objectormethod)-is-an-object:

cannot be null when argument #1 ($objectOrMethod) is an object
--------------------------------------------------------------
 
.. meta::
	:description:
		cannot be null when argument #1 ($objectOrMethod) is an object: The ReflectionMethod class requires 2 argument: the first with the class, and the second with the method name.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: cannot be null when argument #1 ($objectOrMethod) is an object
	:og:description: The ReflectionMethod class requires 2 argument: the first with the class, and the second with the method name
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-be-null-when-argument-%231-%28%24objectormethod%29-is-an-object.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: cannot be null when argument #1 ($objectOrMethod) is an object
	:twitter:description: cannot be null when argument #1 ($objectOrMethod) is an object: The ReflectionMethod class requires 2 argument: the first with the class, and the second with the method name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-be-null-when-argument-#1-($objectormethod)-is-an-object.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-be-null-when-argument-#1-($objectormethod)-is-an-object.html","name":"cannot be null when argument #1 ($objectOrMethod) is an object","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"The ReflectionMethod class requires 2 argument: the first with the class, and the second with the method name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-be-null-when-argument-#1-($objectormethod)-is-an-object.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ReflectionMethod class requires 2 argument: the first with the class, and the second with the method name. Passing one argument is deprecated.

Example
_______

.. code-block:: php

   <?php
   
   $x = new X();
   $method = new ReflectionMethod($x);
   
   ?>

Solutions
_________

+ Adds the name as second argument ``method``.

Related Error Messages
______________________

+ :ref:`must-be-a-valid-method-name`
