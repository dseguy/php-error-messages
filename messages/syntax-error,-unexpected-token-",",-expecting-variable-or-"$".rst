.. _syntax-error,-unexpected-token-",",-expecting-variable-or-"\$":

syntax error, unexpected token ",", expecting variable or "$"
-------------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token ",", expecting variable or "$": This error is reported when a list of global variable is expected after the ``global`` keyword.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;,&quot;, expecting variable or &quot;$&quot;
	:og:description: This error is reported when a list of global variable is expected after the ``global`` keyword
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%2C%22%2C-expecting-variable-or-%22%24%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token ",", expecting variable or "$"
	:twitter:description: syntax error, unexpected token ",", expecting variable or "$": This error is reported when a list of global variable is expected after the ``global`` keyword
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
This error is reported when a list of global variable is expected after the ``global`` keyword. 

There is a similar case with the visibility options ``public``, ``protected`` and ``private``, and the ``static`` keyword, although ``global`` is the only keyword with accepts variable variables.

Generally speaking, there can be no two successive commas in an expression, except with the ``list()`` keyword.


Example
_______

.. code-block:: php

   <?php
   
   class x {
   	public function foo() {
   	    global $a, , $c;
   	}
   }
   ?>

Solutions
_________

+ Remove the extra comma.
+ Fill the empty slot with a variable.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-token-",",-expecting-variable`
