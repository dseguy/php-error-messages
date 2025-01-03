.. _syntax-error,-unexpected-token-"match":

syntax error, unexpected token "match"
--------------------------------------
 
	.. meta::
		:description:
			syntax error, unexpected token "match": In PHP 8.

		:og:type: article
		:og:title: syntax error, unexpected token &quot;match&quot;
		:og:description: In PHP 8
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22match%22.html

Description
___________
 
In PHP 8.0, the ``match`` statement was added to PHP feature: it is a similar feature to ``switch``. ``match`` is now a PHP reserved keyword, and, as such, cannot be used everywhere. For example, it cannot be used as a class, function or interface name; it cannot be used in a function call, although it may be used in method call.

Example
_______

.. code-block:: php

   <?php
   
   $x = match ($a) {};
   
   ?>

Solutions
_________

+ Change the name to something else than ``match``.
