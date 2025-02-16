.. _void-cannot-be-used-as-a-parameter-type:

void cannot be used as a parameter type
---------------------------------------
 
.. meta::
	:description:
		void cannot be used as a parameter type: Void is a type, that can only be used with return type, on methods or functions.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: void cannot be used as a parameter type
	:og:description: Void is a type, that can only be used with return type, on methods or functions
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/void-cannot-be-used-as-a-parameter-type.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: void cannot be used as a parameter type
	:twitter:description: void cannot be used as a parameter type: Void is a type, that can only be used with return type, on methods or functions
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/void-cannot-be-used-as-a-parameter-type.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/void-cannot-be-used-as-a-parameter-type.html","name":"void cannot be used as a parameter type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"Void is a type, that can only be used with return type, on methods or functions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/void-cannot-be-used-as-a-parameter-type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Void is a type, that can only be used with return type, on methods or functions. Here, void represents the absence of value: this is not possible for a property or an argument. The null value is then the closest possible type that can be assigned to a property, yet representing no value.

Example
_______

.. code-block:: php

   <?php
   
     function foo(void $p) { }
   
   ?>

Solutions
_________

+ Use another type for the argument.
+ Remove the argument.
+ Use the null type.

Related Error Messages
______________________

+ :ref:`property-x::$p-cannot-have-type-void`

See Also
________

+ `ThethreenothingsofPHP <https://www.exakat.io/en/the-three-nothings-of-php/>`_
