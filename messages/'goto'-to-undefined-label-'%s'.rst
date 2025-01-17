.. _'goto'-to-undefined-label-'%s':

'goto' to undefined label '%s'
------------------------------
 
.. meta::
	:description:
		'goto' to undefined label '%s': This error is displayed when a goto command has no corresponding label in the method.
		:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: &#039;goto&#039; to undefined label &#039;%s&#039;
		:og:description: This error is displayed when a goto command has no corresponding label in the method
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/%27goto%27-to-undefined-label-%27%25s%27.html
	    :og:locale: en
		:twitter:card: summary_large_image
		:twitter:site: @exakat
		:twitter:title: 'goto' to undefined label '%s'
		:twitter:description: 'goto' to undefined label '%s': This error is displayed when a goto command has no corresponding label in the method
		:twitter:creator: @exakat
		:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
This error is displayed when a goto command has no corresponding label in the method. 

This is an compilation error: it is only reported before execution.

On the other hand, a label without a goto is not reported.


Example
_______

.. code-block:: php

   <?php
   
   function foo() {
   	goto A;
   	A:
   	goto B;
   	// Not such label as B:
   	
   	// A orphan label
   	C:
   }
   
   ?>


Literal Examples
****************
+ 'goto' to undefined label 'THEN'

Solutions
_________

+ Create the missing label.
+ Remove the goto call.
+ Rename the goto call.
