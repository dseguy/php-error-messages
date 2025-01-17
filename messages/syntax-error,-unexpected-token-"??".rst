.. _syntax-error,-unexpected-token-"??":

syntax error, unexpected token "??"
-----------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "??": .
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;??&quot;
	:og:description: 
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%3F%3F%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "??"
	:twitter:description: syntax error, unexpected token "??": 
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
?? is used as the coalesce operator. 

The expression on the left side of that operator must be completed of it to be valid.



Example
_______

.. code-block:: php

   <?php
   
   // an unfinished coalesce operation
   $a = 1 + ?? 3;
   
   ?>

Solutions
_________

+ Finish the expression before the ``?`` in a ternary operation.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-token-"?"`
