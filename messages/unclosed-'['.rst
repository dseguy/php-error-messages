.. _unclosed-'[':

Unclosed '['
------------
 
.. meta::
	:description:
		Unclosed '[': The closing square bracket is missing.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Unclosed &#039;[&#039;
	:og:description: The closing square bracket is missing
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/unclosed-%27%5B%27.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unclosed '['
	:twitter:description: Unclosed '[': The closing square bracket is missing
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
The closing square bracket is missing. 

It might be missing, as in the first example; it might also be inside a string, as in the second example: the double quote is not closed, which includes the closing square bracket, and makes it missing.

Example
_______

.. code-block:: php

   <?php
   
   // This should be at the end of a code, without ; not ?>
   $a[$b[3] 
   
   $a["3] = 4;
   

Solutions
_________

+ Check that the square brackets are balanced.
+ Check that the closing square brackets are not hidden in a string.

Related Error Messages
______________________

+ :ref:`unclosed-'('`
