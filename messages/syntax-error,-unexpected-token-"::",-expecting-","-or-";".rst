.. _syntax-error,-unexpected-token-"::",-expecting-","-or-";":

syntax error, unexpected token "::", expecting "," or ";"
---------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "::", expecting "," or ";": The object operator ``::`` is used in an expression, where it is not expected.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;::&quot;, expecting &quot;,&quot; or &quot;;&quot;
	:og:description: The object operator ``::`` is used in an expression, where it is not expected
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%3A%3A%22%2C-expecting-%22%2C%22-or-%22%3B%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "::", expecting "," or ";"
	:twitter:description: syntax error, unexpected token "::", expecting "," or ";": The object operator ``::`` is used in an expression, where it is not expected
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
The object operator ``::`` is used in an expression, where it is not expected. 

Here, it is a global variable statement. Such statement were possible in PHP 5 and older, but are not valid anymore since PHP 7.0. Then, PHP would use the content of the property as the name of the global variable. 

The same error is emitted with static variables, with the ``::`` and the ``->`` operators.


Example
_______

.. code-block:: php

   <?php
   
   global $object::$property;
   
   static $object::$property;
   
   ?>

Solutions
_________

+ Remove the property or method call from the global instruction.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-token-"?->",-expecting-","-or-";"`
+ :ref:`syntax-error,-unexpected-token-"->",-expecting-","-or-";"`
