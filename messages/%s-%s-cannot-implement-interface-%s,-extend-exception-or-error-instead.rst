.. _%s-%s-cannot-implement-interface-%s,-extend-exception-or-error-instead:

%s %s cannot implement interface %s, extend Exception or Error instead
----------------------------------------------------------------------
 
	.. meta::
		:description:
			%s %s cannot implement interface %s, extend Exception or Error instead: ``Throwable`` is a PHP native and reserved interface.

		:og:type: article
		:og:title: %s %s cannot implement interface %s, extend Exception or Error instead
		:og:description: ``Throwable`` is a PHP native and reserved interface
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s-%25s-cannot-implement-interface-%25s%2C-extend-exception-or-error-instead.html

Description
___________
 
``Throwable`` is a PHP native and reserved interface. It may be used for typing, such as with ``catch`` or parameter typing, but cannot be used directly. 

As the message suggest, the best is to extends an existing class that already implements ``Throwable``, such as ``Error``, ``Exception`` or any of their children classes.

Several interfaces are reserved by PHP: ``UnitEnum``, ``BackedEnum``, ``Throwable``. 


Example
_______

.. code-block:: php

   <?php
   
   class X implements Throwable {}
   
   ?>
   


Literal Examples
****************
+ Class X cannot implement interface Throwable, extend Exception or Error instead

Solutions
_________

+ Extends ``Exception`` class.
+ Extends ``Error`` class.
+ Extends any of the ``Exception`` or ``Error`` classes.
