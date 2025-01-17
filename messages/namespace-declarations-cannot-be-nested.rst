.. _namespace-declarations-cannot-be-nested:

Namespace declarations cannot be nested
---------------------------------------
 
.. meta::
	:description:
		Namespace declarations cannot be nested: Namespace declaration, with blocks, cannot be nested one into the other.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Namespace declarations cannot be nested
	:og:description: Namespace declaration, with blocks, cannot be nested one into the other
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/namespace-declarations-cannot-be-nested.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Namespace declarations cannot be nested
	:twitter:description: Namespace declarations cannot be nested: Namespace declaration, with blocks, cannot be nested one into the other
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
Namespace declaration, with blocks, cannot be nested one into the other. Namespaces must be one next to each other. 

Usually, there is only one namespace per file, without a block.


Example
_______

.. code-block:: php

   <?php
   
   namespace A {
       namespace B {
       
       }
   }
   
   ?>

Solutions
_________

+ Make the namespaces next to each other; concatenate the names to create deep namespaces: ``namespace A\B {..}``.
+ Split the code into several files, each with only one namespace.
