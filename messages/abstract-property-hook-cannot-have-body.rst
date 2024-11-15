.. _abstract-property-hook-cannot-have-body:

Abstract property hook cannot have body
---------------------------------------
 
	.. meta::
		:description:
			Abstract property hook cannot have body: Property hooks, both ``set`` and ``get``, may be made abstract by adding the keyword to the property definition.

		:og:type: article
		:og:title: Abstract property hook cannot have body
		:og:description: Property hooks, both ``set`` and ``get``, may be made abstract by adding the keyword to the property definition
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/abstract-property-hook-cannot-have-body.html

Description
___________
 
Property hooks, both ``set`` and ``get``, may be made abstract by adding the keyword to the property definition. And, just like methods, abstract property hooks cannot have a body. 

Example
_______

.. code-block:: php

   <?php
   
   class X {
       public abstract $property {
           get {}
       }
   }
   
   ?>

Solutions
_________

+ Remove the abstract keyword.
+ Remove the body of the property hook.

Related Error Messages
______________________

+ :ref:`non-abstract-property-hook-must-have-a-body`
