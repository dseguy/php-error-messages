.. _non-abstract-property-hook-must-have-a-body:

Non-abstract property hook must have a body
-------------------------------------------
 
	.. meta::
		:description:
			Non-abstract property hook must have a body: Property hooks, both ``set`` and ``get``, may be made abstract by replacing the body block by a semi-colon.

		:og:type: article
		:og:title: Non-abstract property hook must have a body
		:og:description: Property hooks, both ``set`` and ``get``, may be made abstract by replacing the body block by a semi-colon
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/non-abstract-property-hook-must-have-a-body.html

Description
___________
 
Property hooks, both ``set`` and ``get``, may be made abstract by replacing the body block by a semi-colon. And, just like methods, property hooks must use the ``abstract`` property, although the property definition has to support the option, not the property hook itself. 

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	// error : property hook must have a body
       public $property {
           get;
       }
   
       public abstract $abstractProperty {
           get;
       }
   }
   
   ?>

Solutions
_________

+ Add a body to the property hook.
+ Add the abstract keyword to the property definition.

Related Error Messages
______________________

+ :ref:`abstract-property-hook-cannot-have-body`
