.. _duplicate-named-parameter-\$%s:

Duplicate named parameter $%s
-----------------------------
 
	.. meta::
		:description:
			Duplicate named parameter $%s: Parameter shall only be passed once.

		:og:type: article
		:og:title: Duplicate named parameter $%s
		:og:description: Parameter shall only be passed once
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/duplicate-named-parameter-%24%25s.html

Description
___________
 
Parameter shall only be passed once. For named parameters, this means that the same name shall only be used once when calling the method. 

This problem is never raised with positional arguments, which are automatically indexed. 

There is a distinct error message when this happens to in method calls. 

Example
_______

.. code-block:: php

   <?php
   
   function foo($b, $b) {}
   
   #[MyAttribute(a: 'A', a: 'A')]
   class Test {}
   
   ?>
   


Literal Examples
****************
+ Duplicate named parameter $a
+ Duplicate named parameter $b

Solutions
_________

+ Remove the names of the parameters.
+ Change the name of all the duplicate named parameters, but one.
+ Remove the duplicates named parameters, but one.

Related Error Messages
______________________

+ :ref:`named-parameter-$x-overwrites-previous-argument`
