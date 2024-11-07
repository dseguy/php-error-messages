.. _property-hook-cannot-be-both-abstract-and-private:

Property hook cannot be both abstract and private
-------------------------------------------------
 
	.. meta::
		:description lang=en:
			Property hook cannot be both abstract and private: Property hook may be private, as in only available to current class, or abstract, as in always redefined in a child class, but not both at the same time.

Description
___________
 
Property hook may be private, as in only available to current class, or abstract, as in always redefined in a child class, but not both at the same time. 

It is the same as for methods.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       private abstract $property { get; }
   }
   
   ?>

Solutions
_________

+ Make the method protected or public.
+ Remove the abstract keyword.
