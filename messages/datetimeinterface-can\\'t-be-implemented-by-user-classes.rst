.. _datetimeinterface-can\\'t-be-implemented-by-user-classes:

DateTimeInterface can't be implemented by user classes
------------------------------------------------------
 
	.. meta::
		:description:
			DateTimeInterface can't be implemented by user classes: DateTimeInterface is an interface.

		:og:type: article
		:og:title: DateTimeInterface can&#039;t be implemented by user classes
		:og:description: DateTimeInterface is an interface
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/datetimeinterface-can%5C%27t-be-implemented-by-user-classes.html

Description
___________
 
DateTimeInterface is an interface. It should be available for usage with the implements keyword, but the PHP engines forbids it. Instead, it is recommended to extends the DateTime or DateTimeImmutable classes. 

On the other hand, DateTimeInterface is available to type arguments, properties, etc. or to use with instanceof and catch. 


Example
_______

.. code-block:: php

   <?php
   
   class X implements DateTimeInterface {}
   
   ?>

Solutions
_________

+ Extends DateTime class.
+ Extends DateTimeImmutable class.
