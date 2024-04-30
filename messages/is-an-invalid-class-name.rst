.. _is-an-invalid-class-name:

'%s' is an invalid class name
-----------------------------
 
	.. meta::
		:description lang=en:
			'%s' is an invalid class name: This error is emitted when a fully qualified name is used as a type (property, constant, parameter, returntype), and that cannot be a valid name.

Description
___________
 
This error is emitted when a fully qualified name is used as a type (property, constant, parameter, returntype), and that cannot be a valid name. For example, this applies to ``\self``, ``\static``, ``\parent``. Other keywords, such as ``true``, ``null`` get a different error message. 

Note also that all keywords are not covered with this error message, and some have slipped through the checks: for example, ``\interface``, ``\class``, ``\enum``, ``\resource``... are all valid code. In fact, PHP won't create objects of such types, so this makes such type unusable. 

Example
_______

.. code-block:: php

   <?php
   
   class x {
   	function foo(\self $s) {}
   }
   
   ?>

Solutions
_________

+ Do not use PHP keywords as fully qualified name with a type.
