.. _constant-%s::%s-is-deprecated:

Constant %s::%s is deprecated
-----------------------------
 
	.. meta::
		:description lang=en:
			Constant %s::%s is deprecated: This error is emitted when a class constant is supported in the current PHP engine, but will be removed in a future version.

Description
___________
 
This error is emitted when a class constant is supported in the current PHP engine, but will be removed in a future version.

The error is emitted every time the class constant is used: it may be for its actual intend, or anywhere else.

Example
_______

.. code-block:: php

   <?php
   
   error_reporting(E_STRICT);
   
   ?>

Solutions
_________

+ Stop using that class constant.
+ Find the replacement for this class constant: it might be another constant, or a different command entirely.

Related Error Messages
______________________

+ :ref:`constant-%s-is-deprecated`
