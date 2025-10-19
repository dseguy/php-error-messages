.. _method-%s::__construct()-cannot-declare-a-return-type:

Method %s::__construct() cannot declare a return type
-----------------------------------------------------
 
.. meta::
	:description:
		Method %s::__construct() cannot declare a return type: There can be no return type for a constructor method.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Method %s::__construct() cannot declare a return type
	:og:description: There can be no return type for a constructor method
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/method-%25s%3A%3A__construct%28%29-cannot-declare-a-return-type.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Method %s::__construct() cannot declare a return type
	:twitter:description: Method %s::__construct() cannot declare a return type: There can be no return type for a constructor method
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/method-%s::__construct()-cannot-declare-a-return-type.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/method-%s::__construct()-cannot-declare-a-return-type.html","name":"Method %s::__construct() cannot declare a return type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 27 Sep 2025 07:46:34 +0000","dateModified":"Sat, 27 Sep 2025 07:46:34 +0000","description":"There can be no return type for a constructor method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/method-%s::__construct()-cannot-declare-a-return-type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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


Literal Examples
****************
+ Method X::__construct() cannot declare a return type

Solutions
_________

+ Remove the return type of the method.

Related Error Messages
______________________

+ :ref:`destructors-cannot-declare-a-return-type`
+ :ref:`constructor-%s::%s()-cannot-declare-a-return-type`


In previous PHP versions, this error message used to be :ref:`constructors-cannot-declare-a-return-type`.
