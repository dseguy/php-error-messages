.. _%s-%s-cannot-implement-interface-%s,-extend-exception-or-error-instead:

%s %s cannot implement interface %s, extend Exception or Error instead
----------------------------------------------------------------------
 
.. meta::
	:description:
		%s %s cannot implement interface %s, extend Exception or Error instead: ``Throwable`` is a PHP native and reserved interface.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: %s %s cannot implement interface %s, extend Exception or Error instead
	:og:description: ``Throwable`` is a PHP native and reserved interface
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s-%25s-cannot-implement-interface-%25s%2C-extend-exception-or-error-instead.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: %s %s cannot implement interface %s, extend Exception or Error instead
	:twitter:description: %s %s cannot implement interface %s, extend Exception or Error instead: ``Throwable`` is a PHP native and reserved interface
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

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
