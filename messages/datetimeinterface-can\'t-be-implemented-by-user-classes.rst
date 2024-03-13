.. _datetimeinterface-can\'t-be-implemented-by-user-classes:

DateTimeInterface can't be implemented by user classes
------------------------------------------------------
 
	.. meta::
		:description lang=en:
			DateTimeInterface can't be implemented by user classes: DateTimeInterface is an interface.

Description
___________
 
DateTimeInterface is an interface. It should be available for usage with the implements keyword, but the PHP engines forbids it. Instead, it is recommended to extends the DateTime or DateTimeImmutable classes. 

On the other hand, DateTimeInterface is available to type arguments, properties, etc. or to use with instanceof and catch. 


Example
_______

.. code-block:: php

   <?php
   
   class x implements DateTimeInterface {}
   
   ?>

Solutions
_________

+ Extends DateTime class.
+ Extends DateTimeImmutable class.
