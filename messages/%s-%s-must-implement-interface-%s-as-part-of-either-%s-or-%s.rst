.. _%s-%s-must-implement-interface-%s-as-part-of-either-%s-or-%s:

%s %s must implement interface %s as part of either %s or %s
------------------------------------------------------------
 
	.. meta::
		:description:
			%s %s must implement interface %s as part of either %s or %s: It is not possible to implement directly the mentionned interface.

		:og:type: article
		:og:title: %s %s must implement interface %s as part of either %s or %s
		:og:description: It is not possible to implement directly the mentionned interface
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s-%25s-must-implement-interface-%25s-as-part-of-either-%25s-or-%25s.html

Description
___________
 
It is not possible to implement directly the mentionned interface. That interface is actually implemented by a list of PHP native classes: these classes may be extended, and, as such, the children classes also implements the initial interface.

This error message is applicable to a few PHP native interfaces, such as ``Throwable``. It is not possible to enforce is with userland code.

Example
_______

.. code-block:: php

   <?php
   
   class x implements Throwable {}
   
   ?>


Literal Examples
****************
+ Class %s must implement interface %s as part of either %s or %s

Solutions
_________

+ Extends the classes mentionned in the error message.


In previous PHP versions, this error message used to be :ref:`class-%s-must-implement-interface-%s-as-part-of-either-%s-or-%s`.
