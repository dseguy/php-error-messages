.. _syntax-error,-unexpected-token-"(":

syntax error, unexpected token "("
----------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "(": A class cannot hold a closure, only method, which are functions with a name.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;(&quot;
	:og:description: A class cannot hold a closure, only method, which are functions with a name
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%28%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "("
	:twitter:description: syntax error, unexpected token "(": A class cannot hold a closure, only method, which are functions with a name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
A class cannot hold a closure, only method, which are functions with a name.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       function () {}
   }
   
   ?>

Solutions
_________

+ Add the name to the method.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-token-"}"`
