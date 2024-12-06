.. _non-abstract-method-%s::%s()-must-contain-body:

Non-abstract method %s::%s() must contain body
----------------------------------------------
 
	.. meta::
		:description:
			Non-abstract method %s::%s() must contain body: A method must have a body block.

		:og:type: article
		:og:title: Non-abstract method %s::%s() must contain body
		:og:description: A method must have a body block
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/non-abstract-method-%25s%3A%3A%25s%28%29-must-contain-body.html

Description
___________
 
A method must have a body block. When it has no body block, it has a semicolon instead, and it must have the ``abstract`` keyword for the method, and following, to the class.

Example
_______

.. code-block:: php

   <?php
   
   class X {
        function foo() ;
   }
   
   ?>


Literal Examples
****************
+ Non-abstract method X::foo() must contain body

Solutions
_________

+ Add a body block to the method.
+ Add a abstract option to the method and to the class.

Related Error Messages
______________________

+ :ref:`class-%s-contains-%d-abstract-method%s-and-must-therefore-be-declared-abstract-or-implement-the-remaining-methods`
