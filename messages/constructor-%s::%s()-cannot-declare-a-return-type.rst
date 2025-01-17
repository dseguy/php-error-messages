.. _constructor-%s::%s()-cannot-declare-a-return-type:

Constructor %s::%s() cannot declare a return type
-------------------------------------------------
 
.. meta::
	:description:
		Constructor %s::%s() cannot declare a return type: There can be no return type for a constructor method.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Constructor %s::%s() cannot declare a return type
	:og:description: There can be no return type for a constructor method
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/constructor-%25s%3A%3A%25s%28%29-cannot-declare-a-return-type.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Constructor %s::%s() cannot declare a return type
	:twitter:description: Constructor %s::%s() cannot declare a return type: There can be no return type for a constructor method
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

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
+ Constructor X::__construct() cannot declare a return type

Solutions
_________

+ Remove the return type of the method.

Related Error Messages
______________________

+ :ref:`destructors-cannot-declare-a-return-type`
