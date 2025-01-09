.. _syntax-error,-unexpected-token-"<<":

syntax error, unexpected token "<<"
-----------------------------------
 
	.. meta::
		:description:
			syntax error, unexpected token "<<": This error might be related to the left bitshift operator, although it is often related to a git diff leftover.

		:og:type: article
		:og:title: syntax error, unexpected token &quot;&lt;&lt;&quot;
		:og:description: This error might be related to the left bitshift operator, although it is often related to a git diff leftover
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%3C%3C%22.html

Description
___________
 
This error might be related to the left bitshift operator, although it is often related to a git diff leftover. Here, a merge conflict was left in the code, and the first and erroneous characters are ``<<``.

There are other possibilities of error with that operator, although they are less common.


Example
_______

.. code-block:: php

   <?php
   
   <<<<<<< HEAD
       $a = 2 * $b;
   =======
       $a = 3 * $b + 1;
   >>>>>>> e0ce25cd1fe156c2f50def834532e489b923dcef
   
   ?>

Solutions
_________

+ Remove the diff from the code, as it doesn't compile.
+ Fix the merge conflict.
