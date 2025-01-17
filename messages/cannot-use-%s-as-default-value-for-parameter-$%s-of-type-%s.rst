.. _cannot-use-%s-as-default-value-for-parameter-\$%s-of-type-%s:

Cannot use %s as default value for parameter $%s of type %s
-----------------------------------------------------------
 
	.. meta::
		:description:
			Cannot use %s as default value for parameter $%s of type %s: The default value of the parameter is not compatible with the type of the same parameter.

	    :og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Cannot use %s as default value for parameter $%s of type %s
		:og:description: The default value of the parameter is not compatible with the type of the same parameter
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%25s-as-default-value-for-parameter-%24%25s-of-type-%25s.html
	    :og:locale: en

	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use %s as default value for parameter $%s of type %s
	:twitter:description: Cannot use %s as default value for parameter $%s of type %s: The default value of the parameter is not compatible with the type of the same parameter
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
Description
___________
 
The default value of the parameter is not compatible with the type of the same parameter. In the example here, the paramter ``$s`` is supposed to be an integer, but has a string as default value.

This error also applies to numeric strings: the default value must be of the same type, without any silent type juggling.

It used to be recommended to make the default value ``NULL`` as it would be implicitely accepted by the type. Yet, in PHP 8.4, this is now a deprecated behavior, and it is not recommended anymore.


Example
_______

.. code-block:: php

   <?php
   <?php
   
   function foo(int $s = 's') { }
   
   function bar(int $s = '1') { }
   
   ?>

Solutions
_________

+ Change the type of the parameter.
+ Change the default value.
+ Remove the default value.
+ Remove the type value.
+ Add a second union type to the paramter.

Related Error Messages
______________________

+ :ref:`default-value-for-parameters-with-a-%s-type-can-only-be-%s-or-null`
