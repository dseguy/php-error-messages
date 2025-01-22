.. _call-to-undefined-function-exit():

Call to undefined function exit()
---------------------------------
 
.. meta::
	:description:
		Call to undefined function exit(): exit and die used to be language constructures, until PHP 8.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Call to undefined function exit()
	:og:description: exit and die used to be language constructures, until PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/call-to-undefined-function-exit%28%29.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Call to undefined function exit()
	:twitter:description: Call to undefined function exit(): exit and die used to be language constructures, until PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
exit and die used to be language constructures, until PHP 8.4. Then, they could not be used in a dynamic function call, such as shown here. Indeed, language constructs are not accessible with that syntax.

Since PHP 8.4, ``die`` and ``exit`` are defined as functions, and shall be used with the dynamic call feature.


Example
_______

.. code-block:: php

   <?php
   
   $function = 'exit';
   $function();
   
   ?>

Solutions
_________

+ Upgrade to PHP 8.4.

Related Error Messages
______________________

+ :ref:`call-to-undefined-function`
+ :ref:`call-to-undefined-function-each()`
