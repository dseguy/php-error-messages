.. _property-hook-cannot-be-both-final-and-private:

Property hook cannot be both final and private
----------------------------------------------
 
	.. meta::
		:description lang=en:
			Property hook cannot be both final and private: When a property is final, it cannot be overridden in a child class.

Description
___________
 
When a property is final, it cannot be overridden in a child class; when a class is private, it is only available in the current class. 

Hence, a property cannot be final and private at the same time. 

In this situation, the property may be final, due to the property hooks. A property without hooks cannot be final.

Example
_______

.. code-block:: php

   <?php
   
   class x {
   	private $p {
   		final get => 2;
   		set => $this->p = $value;
   	}
   }
   
   ?>

Solutions
_________

+ Remove the hooks, and use the magic methods __get/__set.
+ Remove the final keyword.
+ Remove the private keyword and use protected or public.
