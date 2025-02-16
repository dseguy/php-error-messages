.. _constructors-cannot-declare-a-return-type:

Constructors cannot declare a return type
-----------------------------------------
 
.. meta::
	:description:
		Constructors cannot declare a return type: There can be no return type for a constructor method.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Constructors cannot declare a return type
	:og:description: There can be no return type for a constructor method
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/constructors-cannot-declare-a-return-type.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Constructors cannot declare a return type
	:twitter:description: Constructors cannot declare a return type: There can be no return type for a constructor method
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/constructors-cannot-declare-a-return-type.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/constructors-cannot-declare-a-return-type.html","name":"Constructors cannot declare a return type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"There can be no return type for a constructor method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/constructors-cannot-declare-a-return-type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
There can be no return type for a constructor method. It is called while creating a new instance of an object, but it doesn't return the object itself. This is the case even if $this is available in the method.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	function __construct() : int {
   	
   	}
   }
   
   ?>

Solutions
_________

+ Remove the return type of the method.

Related Error Messages
______________________

+ :ref:`destructors-cannot-declare-a-return-type`
+ :ref:`method-%s::%s()-cannot-declare-a-return-type`
