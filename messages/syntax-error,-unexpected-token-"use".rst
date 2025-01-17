.. _syntax-error,-unexpected-token-"use":

syntax error, unexpected token "use"
------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "use": ``use`` expression must be place at the top level of a file, a namespace block, or a class, enum or trait block.
		:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: syntax error, unexpected token &quot;use&quot;
		:og:description: ``use`` expression must be place at the top level of a file, a namespace block, or a class, enum or trait block
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22use%22.html
	    :og:locale: en
		:twitter:card: summary_large_image
		:twitter:site: @exakat
		:twitter:title: syntax error, unexpected token "use"
		:twitter:description: syntax error, unexpected token "use": ``use`` expression must be place at the top level of a file, a namespace block, or a class, enum or trait block
		:twitter:creator: @exakat
		:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

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
       use stdClass as A;
   }

Solutions
_________

+ Move the ``use`` out of the if structure.
+ Remove the ``use`` command.
