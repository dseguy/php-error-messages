.. _cannot-use-lexical-variable-x-as-a-parameter-name:

Cannot use lexical variable $x as a parameter name
--------------------------------------------------
 
	.. meta::
		:description:
			Cannot use lexical variable $x as a parameter name: It is not possible to use a parameter and import a variable of the same name.

		:og:type: article
		:og:title: Cannot use lexical variable $x as a parameter name
		:og:description: It is not possible to use a parameter and import a variable of the same name
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-lexical-variable-x-as-a-parameter-name.html

Description
___________
 
It is not possible to use a parameter and import a variable of the same name. This would result in a naming conflict, and a data overwrite. All names should be distinct.

Example
_______

.. code-block:: php

   <?php
   
   function ($a) use ($a) {}; 
   
   ?>

Solutions
_________

+ Rename the variable in the use clause.
+ Rename the parameter in the function clause.
