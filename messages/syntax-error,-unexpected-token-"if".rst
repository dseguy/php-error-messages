.. _syntax-error,-unexpected-token-"if":

syntax error, unexpected token "if"
-----------------------------------
 
	.. meta::
		:description:
			syntax error, unexpected token "if": If-then expressions are standalone expressions, and cannot be used inside another expression.

		:og:type: article
		:og:title: syntax error, unexpected token &quot;if&quot;
		:og:description: If-then expressions are standalone expressions, and cannot be used inside another expression
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22if%22.html

Description
___________
 
If-then expressions are standalone expressions, and cannot be used inside another expression. Hence, they must be preceded by a semi-colon, or any other expression closing character.

Example
_______

.. code-block:: php

   <?php
   
   $a = foo() && if ($a == 2) { echo $a; } else { echo "No A"; }
   
   match( 
   if ($a == 2) { echo $a; } else { echo "No A"; }
   
   ?>

Solutions
_________

+ Replace the ``&&`` by a semi-colon.
+ Move the ``$a = foo() &&`` inside the if condition, before the ``$a == 2``.
+ Check for opening parenthesis, and make sure they are closed.
+ Check for previous statements that uses parenthesis, such as match, switch, if... and make sure they are closed.
