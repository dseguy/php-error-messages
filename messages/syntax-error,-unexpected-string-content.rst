.. _syntax-error,-unexpected-string-content:

syntax error, unexpected string content
---------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected string content: This error appears when a single quote string is not properly closed.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected string content
	:og:description: This error appears when a single quote string is not properly closed
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-string-content.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected string content
	:twitter:description: syntax error, unexpected string content: This error appears when a single quote string is not properly closed
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
This error appears when a single quote string is not properly closed. In the example, there is an opening single quote, but not a closing one. PHP tries to use the rest of the code as a literal string, and ends up without tokens to wrap up the code legally.

Example
_______

.. code-block:: php

   <?php
   
   { $a = '1+2; }
   
   

Solutions
_________

+ 

Related Error Messages
______________________

+ :ref:`unclosed-'{'`
