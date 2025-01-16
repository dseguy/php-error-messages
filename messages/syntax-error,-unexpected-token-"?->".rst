.. _syntax-error,-unexpected-token-"?->":

syntax error, unexpected token "?->"
------------------------------------
 
	.. meta::
		:description:
			syntax error, unexpected token "?->": This error reports that the object syntax was not expected there.

		:og:type: article
		:og:title: syntax error, unexpected token &quot;?-&gt;&quot;
		:og:description: This error reports that the object syntax was not expected there
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%3F-%3E%22.html

Description
___________
 
This error reports that the object syntax was not expected there. 

One classic reason is the new syntax in PHP 8.4, where parenthesis are not necessary, right after a new, to call properties or methods. This syntax actually requires the parenthesis.

Example
_______

.. code-block:: php

   <?php
   
   // should be new X()?->method();
   new X?->method();
   
   ?>

Solutions
_________

+ Add the parenthesis on the ``new`` call.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-token-"->"`
