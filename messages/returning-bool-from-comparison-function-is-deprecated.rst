.. _returning-bool-from-comparison-function-is-deprecated:

Returning bool from comparison function is deprecated
-----------------------------------------------------
 
.. meta::
	:description:
		Returning bool from comparison function is deprecated: The comparison function should return 0, 1 or -1, and not just booleans.
		:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Returning bool from comparison function is deprecated
		:og:description: The comparison function should return 0, 1 or -1, and not just booleans
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/returning-bool-from-comparison-function-is-deprecated.html
	    :og:locale: en
		:twitter:card: summary_large_image
		:twitter:site: @exakat
		:twitter:title: Returning bool from comparison function is deprecated
		:twitter:description: Returning bool from comparison function is deprecated: The comparison function should return 0, 1 or -1, and not just booleans
		:twitter:creator: @exakat
		:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
The comparison function should return 0, 1 or -1, and not just booleans. 1 means that ``$a > $b``, -1 that ``$a < $b`` and 0 means that ``$a === $b``. This is a richer information than boolean, and it also fits very well with the spaceship operator ``<=>``.

Example
_______

.. code-block:: php

   <?php
   
   function mySort(int $a, int $b) : bool {
       return $a > $b;
   }
   
   $array = [1,2,3,4,5,6,7,8,9,10];
   usort($array, mySort(...));
   
   ?>

Solutions
_________

+ Set the returntype of the comparison function to int.
+ Use the spaceship operator as possible.
+ Cast the result to integer.
