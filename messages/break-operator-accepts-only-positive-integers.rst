.. _break-operator-accepts-only-positive-integers:

break operator accepts only positive integers
---------------------------------------------
 
.. meta::
	:description:
		break operator accepts only positive integers: ``break`` indicates the number of nested loop to break from.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: break operator accepts only positive integers
	:og:description: ``break`` indicates the number of nested loop to break from
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/break-operator-accepts-only-positive-integers.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: break operator accepts only positive integers
	:twitter:description: break operator accepts only positive integers: ``break`` indicates the number of nested loop to break from
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
``break`` indicates the number of nested loop to break from. The minimum is 1. 0 would be a no operation, and shall be skipped. Negative numbers or decimals make no sense.

Example
_______

.. code-block:: php

   <?php
   
   $a = [];
   foreach($a as $b) {
       break 0;
       
   }
   
   ?>

Solutions
_________

+ Remove the continue command.
+ Remove the 0.

Related Error Messages
______________________

+ :ref:`continue-operator-accepts-only-positive-integers`
