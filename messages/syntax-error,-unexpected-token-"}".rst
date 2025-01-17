.. _syntax-error,-unexpected-token-"}":

syntax error, unexpected token "}"
----------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "}": The closing curly bracket usually mark the end of a block of instructions.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;}&quot;
	:og:description: The closing curly bracket usually mark the end of a block of instructions
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%7D%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "}"
	:twitter:description: syntax error, unexpected token "}": The closing curly bracket usually mark the end of a block of instructions
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
The closing curly bracket usually mark the end of a block of instructions.

When it is reported as an error, it means that the previous instruction was not closed as expected. For example, when a semi-colon was not forgotten on the previous line.


Example
_______

.. code-block:: php

   <?php
   
   if ($c == 3) { print 'OK'.PHP_EOL }
   
   ?>

Solutions
_________

+ Check if the previous line need a semi-colon ``;``.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-token-"{"`
