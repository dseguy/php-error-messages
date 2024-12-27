.. _syntax-error,-unexpected-token-"?":

syntax error, unexpected token "?"
----------------------------------
 
	.. meta::
		:description:
			syntax error, unexpected token "?": .

		:og:type: article
		:og:title: syntax error, unexpected token &quot;?&quot;
		:og:description: 
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%3F%22.html

Description
___________
 
? is used in several syntaxes in PHP. 

+ as ``null`` in a type specification (argument, returntype, property, class constant), when it is the first type specified: ``?A $a``
+ as the terny operator `` $condition ? $then : $else ``. Then, the condition must be a complete expression.



Example
_______

.. code-block:: php

   <?php
   
   // an unfinished ternary operation
   $a = 1 + ? 3 : 2 ;
   
   // ? should be written null in a type specification
   function foo(a|? $a) {}
   
   ?>

Solutions
_________

+ Finish the expression before the ``?`` in a ternary operation.
+ Use the ``null`` type when specifying a type.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-token-"??"`
