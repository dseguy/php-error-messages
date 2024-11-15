.. _hooked-properties-cannot-be-readonly:

Hooked properties cannot be readonly
------------------------------------
 
	.. meta::
		:description:
			Hooked properties cannot be readonly: The readonly keyword is not allowed on hooked properties.

		:og:type: article
		:og:title: Hooked properties cannot be readonly
		:og:description: The readonly keyword is not allowed on hooked properties
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/hooked-properties-cannot-be-readonly.html

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
