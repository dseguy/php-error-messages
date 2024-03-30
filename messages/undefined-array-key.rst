.. _undefined-array-key:

Undefined array key
-------------------
 
	.. meta::
		:description lang=en:
			Undefined array key: This notice is emitted when an offset (string or integer) is being used before being defined.

Description
___________
 
This notice is emitted when an offset (string or integer) is being used before being defined. In a word, the elemenent at this offset is not created yet, so PHP creates it on the fly, as NULL, then uses it. 

Example
_______

.. code-block:: php

   <?php
   
   echo [1,2,3][4];
   
   ?>

Solutions
_________

+ Test the existence of the offset before usage.
+ Gives the offset a default value before usage.

Related Error Messages
______________________

+ :ref:`undefined-variable`


In previous PHP versions, this error message used to be ":ref:`Undefined offset <undefined-offset>`"
