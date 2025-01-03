.. _syntax-error,-unexpected-token-"if",-expecting-")":

syntax error, unexpected token "if", expecting ")"
--------------------------------------------------
 
	.. meta::
		:description:
			syntax error, unexpected token "if", expecting ")": If-then commands are standalone commands.

		:og:type: article
		:og:title: syntax error, unexpected token &quot;if&quot;, expecting &quot;)&quot;
		:og:description: If-then commands are standalone commands
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22if%22%2C-expecting-%22%29%22.html

Description
___________
 
If-then commands are standalone commands. They can't be part of another expression. Here, PHP found the ``if``, while it was expecting another expression. 

Then, PHP mentions that it was expecting ``)``: this usually hints at an unclosed method call syntax. In the example here, the previous line holds an unclosed function call to ``foo``.


Example
_______

.. code-block:: php

   <?php
   
   $a = foo(1 
   
   if ($a == 2) {
       print OK;
   }
   
   ?>

Solutions
_________

+ Look for the previous opening ``(`` parenthesis in functioncalls and check that it is balanced.
+ Look for all previous openings ``(`` parenthesis in functioncalls and check that they are all balanced.
