.. _syntax-error,-unexpected-token-"#[",-expecting-","-or-";":

syntax error, unexpected token "#[", expecting "," or ";"
---------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "#[", expecting "," or ";": The ``#[`` token marks the beginning of an attribute.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;#[&quot;, expecting &quot;,&quot; or &quot;;&quot;
	:og:description: The ``#[`` token marks the beginning of an attribute
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%23%5B%22%2C-expecting-%22%2C%22-or-%22%3B%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "#[", expecting "," or ";"
	:twitter:description: syntax error, unexpected token "#[", expecting "," or ";": The ``#[`` token marks the beginning of an attribute
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
The ``#[`` token marks the beginning of an attribute. The previous statement is either not finished with a semi-colon, or could be extended with another set of code and then finished with a semi-colon.

Example
_______

.. code-block:: php

   <?php
   
   // missing ; or , 
   use A as B
   
   #[MyAttribute]
   class X {}
   
   ?>

Solutions
_________

+ Finish the previous ``use`` statement, with a semi-colon.
+ Complete the previous ``use`` statement, and finish it with a semi-colon.
