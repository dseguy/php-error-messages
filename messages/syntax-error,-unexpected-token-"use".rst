.. _syntax-error,-unexpected-token-"use":

syntax error, unexpected token "use"
------------------------------------
 
	.. meta::
		:description:
			syntax error, unexpected token "use": ``use`` expression must be place at the top level of a file, a namespace block, or a class, enum or trait block.

		:og:type: article
		:og:title: syntax error, unexpected token &quot;use&quot;
		:og:description: ``use`` expression must be place at the top level of a file, a namespace block, or a class, enum or trait block
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22use%22.html

Description
___________
 
``use`` expression must be place at the top level of a file, a namespace block, or a class, enum or trait block. 

In particular, when set in a structure such as a ``foreach``, it yields a syntax error. 

Besides that, the command is actually valid.


Example
_______

.. code-block:: php

   <?php 
   if ($a) {
       use stdclass as A;
   }


Literal Examples
****************
+ 

Solutions
_________

+ Move the ``use`` out of the if structure.
+ Remove the ``use`` command.
