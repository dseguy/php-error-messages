.. _unknown-named-parameter-\$%s:

Unknown named parameter $%s
---------------------------
 
.. meta::
	:description:
		Unknown named parameter $%s: Named parameters are the parameters of the function, or method.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Unknown named parameter $%s
	:og:description: Named parameters are the parameters of the function, or method
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/unknown-named-parameter-%24%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unknown named parameter $%s
	:twitter:description: Unknown named parameter $%s: Named parameters are the parameters of the function, or method
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
Named parameters are the parameters of the function, or method. Their actual name is the name of the variable, without the leading ``$`` sign. 

With named parameters, the case is important, just like with variables.


Example
_______

.. code-block:: php

   <?php
   
   function foo($a, $b) {}
   
   foo(c: 1);
   
   ?>


Literal Examples
****************
+ Unknown named parameter $c

Solutions
_________

+ Check the case of the parameter.
+ Check the signature of the method to see if that parameter actually exists.
+ Add the parameter to the method signature.
+ Remove the name in the method call, and rely on positional arguments.
