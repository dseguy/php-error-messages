.. _syntax-error,-unexpected-token-"continue":

syntax error, unexpected token "continue"
-----------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "continue": ``continue`` is a token that stop the current loop or ``switch``, and proceed from the end of that loop.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;continue&quot;
	:og:description: ``continue`` is a token that stop the current loop or ``switch``, and proceed from the end of that loop
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22continue%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "continue"
	:twitter:description: syntax error, unexpected token "continue": ``continue`` is a token that stop the current loop or ``switch``, and proceed from the end of that loop
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
``continue`` is a token that stop the current loop or ``switch``, and proceed from the end of that loop. ``continue`` is standalone expression, and cannot be part of another expression: this is why it is forbidden in the array, or the ``match`` command.

Example
_______

.. code-block:: php

   <?php
       // break does not fit everwhere
       $a = [1 => continue ];
   
       // break is for switch, not match
       $b = match($c) {
           1 => continue,
       };
   
   ?>

Solutions
_________

+ Remove the continue, and find another way to jump out of the loop.

Related Error Messages
______________________

+ :ref:`'%s'-not-in-the-'loop'-or-'switch'-context`
