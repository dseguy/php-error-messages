.. _named-parameter-$x-overwrites-previous-argument:

Named parameter $x overwrites previous argument
-----------------------------------------------
 
	.. meta::
		:description lang=en:
			Named parameter $x overwrites previous argument: Named parameter and positional arguments are setting the same argument, with different name.

Description
___________
 
Named parameter and positional arguments are setting the same argument, with different name. PHP reports this to avoid overwritting the first with the second. 

In the example, there are two cases for this error: either a repetition of the same parameter in the argument list, or a mix of positional and named parameters, which leads to the second overwriting the first. 

There is a distinct error message when this happens to in attributes calls. 


Example
_______

.. code-block:: php

   <?php
   
   function foo($a, $b) {}
   
   foo(a: 1, a:1);
   foo(1, a:1);
   
   ?>

Solutions
_________

+ Remove duplicate named parameters in the argument list.
+ Add all names to parameters in the argument list.
+ Remove all names to parameters in the argument list.

Related Error Messages
______________________

+ :ref:`duplicate-named-parameter-$%s`
