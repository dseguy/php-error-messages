.. _%s-function-%s::%s()-cannot-be-declared-private:

%s function %s::%s() cannot be declared private
-----------------------------------------------
 
	.. meta::
		:description lang=en:
			%s function %s::%s() cannot be declared private: A method may be private, as in only available to current class, or abstract, as in always redefined in a child class, but not both at the same time.

Description
___________
 
A method may be private, as in only available to current class, or abstract, as in always redefined in a child class, but not both at the same time. 

These two properties are mutually exclusive.


Example
_______

.. code-block:: php

   <?php
   
   class X {
   	private abstract function foo() ;
   }
   
   ?>

Solutions
_________

+ Make the method protected or public.
+ Remove the abstract keyword.
