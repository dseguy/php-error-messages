.. _access-type-for-interface-method-%s::%s()-must-be-public:

Access type for interface method %s::%s() must be public
--------------------------------------------------------
 
	.. meta::
		:description:
			Access type for interface method %s::%s() must be public: An method or a constant, that are defined in an interface, must appear as ``public`` in all the implementing classes.

		:og:type: article
		:og:title: Access type for interface method %s::%s() must be public
		:og:description: An method or a constant, that are defined in an interface, must appear as ``public`` in all the implementing classes
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/access-type-for-interface-method-%25s%3A%3A%25s%28%29-must-be-public.html

Description
___________
 
An method or a constant, that are defined in an interface, must appear as ``public`` in all the implementing classes. They cannot be made ``protected`` or ``private``, as they would be no accessible. 

Example
_______

.. code-block:: php

   <?php
   
   interface i {
       function foo();
       
       const C = 1;
   }
   
   class x implements i {
       private function foo() {}
   
       protected const C = 1;
   }
   
   ?>


Literal Examples
****************
+ Access type for interface method x::foo() must be public

Solutions
_________

+ Set the visibility to public in the class.
+ Remove the method in the interface.
+ Remove the implements keyword in the class.

Related Error Messages
______________________

+ :ref:`access-type-for-interface-constant-%s::%s-must-be-public`
