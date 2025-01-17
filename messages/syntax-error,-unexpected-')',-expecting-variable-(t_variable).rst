.. _syntax-error,-unexpected-')',-expecting-variable-(t_variable):

syntax error, unexpected ')', expecting variable (T_VARIABLE)
-------------------------------------------------------------
 
	.. meta::
		:description:
			syntax error, unexpected ')', expecting variable (T_VARIABLE): This error is related to the support the trailing comma in function calls: in PHP 7.

	    :og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: syntax error, unexpected &#039;)&#039;, expecting variable (T_VARIABLE)
		:og:description: This error is related to the support the trailing comma in function calls: in PHP 7
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-%27%29%27%2C-expecting-variable-%28t_variable%29.html
	    :og:locale: en

	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected ')', expecting variable (T_VARIABLE)
	:twitter:description: syntax error, unexpected ')', expecting variable (T_VARIABLE): This error is related to the support the trailing comma in function calls: in PHP 7
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
Description
___________
 
This error is related to the support the trailing comma in function calls: in PHP 7.4, it is allowed to add a final comma at the end of the arguments list, and yet, not provide an extra argument. 

Example
_______

.. code-block:: php

   <?php
   
   function foo($a,
                $b,
                $c) { echo __METHOD__; }
   
   echo foo(1,
            2,
            3,
            );
   
   ?>

Solutions
_________

+ Upgrade to PHP 7.4.
+ Remove the trailing comma.
