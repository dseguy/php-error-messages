.. _required-parameter-$%s-follows-optional-parameter-$%s:

Required parameter $%s follows optional parameter $%s
-----------------------------------------------------
 
	.. meta::
		:description lang=en:
			Required parameter $%s follows optional parameter $%s: An optional parameter has a default value, while a required parameter doesn't.

Description
___________
 
An optional parameter has a default value, while a required parameter doesn't. In a method signature, PHP recommends to set the required parameters first, then the optional parameter. 

When this is not the case, PHP is unable to understand if an argument has to be assigned to a parameter, or if it can be skipped, and assigned to the next required. When this happens, any required parameter makes previously defined parameter also required. 


Example
_______

.. code-block:: php

   <?php
   	
   function foo($a = 1, $b) {}
   	
   ?>

Solutions
_________

+ Remove the default value of the early optional parameter.
+ Add a default value of the late required parameter.


In more recent PHP versions, this error message is now :ref:`optional-parameter-$%s-declared-before-required-parameter-$%s-is-implicitly-treated-as-a-required-parameter`.
