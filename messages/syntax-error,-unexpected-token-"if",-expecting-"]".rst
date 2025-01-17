.. _syntax-error,-unexpected-token-"if",-expecting-"]":

syntax error, unexpected token "if", expecting "]"
--------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "if", expecting "]": If-then commands are standalone commands.
		:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: syntax error, unexpected token &quot;if&quot;, expecting &quot;]&quot;
		:og:description: If-then commands are standalone commands
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22if%22%2C-expecting-%22%5D%22.html
	    :og:locale: en
		:twitter:card: summary_large_image
		:twitter:site: @exakat
		:twitter:title: syntax error, unexpected token "if", expecting "]"
		:twitter:description: syntax error, unexpected token "if", expecting "]": If-then commands are standalone commands
		:twitter:creator: @exakat
		:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
If-then commands are standalone commands. They can't be part of another expression. Here, PHP found the ``if``, while it was expecting another expression. 

Then, PHP mentions that it was expecting ``]``: this usually hints at an unclosed array syntax. In the example here, the previous line holds an unclosed array.


Example
_______

.. code-block:: php

   <?php
   
   $a = [1,2, 
   
   if ($a == 2) {
       print OK;
   }
   
   ?>

Solutions
_________

+ Look for the previous opening ``[`` square bracket and check that it is all balanced.
+ Look for all previous openings ``[`` square brackets and check that they are all balanced.
