.. _call-to-undefined-function-exit():

Call to undefined function exit()
---------------------------------
 
	.. meta::
		:description lang=en:
			Call to undefined function exit(): exit and die used to be language constructures, until PHP 8.

Description
___________
 
exit and die used to be language constructures, until PHP 8.4. Then, they could not be used in a dynamic function call, such as shown here. Indeed, language constructs are not accessible with that syntax.

Since PHP 8.4, die and exit are defined as functions, and shall be used with the dynamic call feature.


Example
_______

.. code-block:: php

   <?php
   
   $function = 'exit';
   $function();
   
   ?>

Solutions
_________

+ Upgrade to PHP 8.4.
