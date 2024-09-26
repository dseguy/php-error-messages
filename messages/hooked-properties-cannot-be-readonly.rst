.. _hooked-properties-cannot-be-readonly:

Hooked properties cannot be readonly
------------------------------------
 
	.. meta::
		:description lang=en:
			Hooked properties cannot be readonly: The readonly keyword is not allowed on hooked properties.

Description
___________
 
The readonly keyword is not allowed on hooked properties. On the other hand, it is possible to emulate that feature, by writing the ``set`` method. 

Example
_______

.. code-block:: php

   <?php
   
   class x {
       public readonly string $x {
       	get => $this->x;
       	
       	set { if (!isset($this->x)) $this->x = $value;}
       }
   }
   
   ?>

Solutions
_________

+ Use the ``set`` hook to emulate readonly.
+ Omit the readonly keyword.
