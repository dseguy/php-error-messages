.. _is-an-invalid-class-name:

'%s' is an invalid class name
-----------------------------
 
	.. meta::
		:description:
			'%s' is an invalid class name: This error is emitted when a fully qualified name is used as a type (property, constant, parameter, returntype), and that cannot be a valid name.

		:og:type: article
		:og:title: &#039;%s&#039; is an invalid class name
		:og:description: This error is emitted when a fully qualified name is used as a type (property, constant, parameter, returntype), and that cannot be a valid name
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/is-an-invalid-class-name.html

Description
___________
 
This error is emitted when a fully qualified name is used as a type (property, constant, parameter, returntype), and that cannot be a valid name. For example, this applies to ``\self``, ``\static``, ``\parent``. Other keywords, such as ``true``, ``null`` get a different error message. 

Note also that all keywords are not covered with this error message, and some have slipped through the checks: for example, ``\interface``, ``\class``, ``\enum``, ``\resource``... are all valid code. In fact, PHP won't create objects of such types, so this makes such type unusable. 

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	function foo(\self $s) {}
   }
   
   ?>

Solutions
_________

+ Do not use PHP keywords as fully qualified name with a type.
