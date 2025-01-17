.. _empty-delimiter:

Empty delimiter
---------------
 
.. meta::
	:description:
		Empty delimiter: The explode() function doesn&#039;t work without a non-empty delimiter.
		:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Empty delimiter
		:og:description: The explode() function doesn&#039;t work without a non-empty delimiter
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/empty-delimiter.html
	    :og:locale: en
		:twitter:card: summary_large_image
		:twitter:site: @exakat
		:twitter:title: Empty delimiter
		:twitter:description: Empty delimiter: The explode() function doesn't work without a non-empty delimiter
		:twitter:creator: @exakat
		:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
The explode() function doesn't work without a non-empty delimiter. Use an alternative, such as str_split().

Example
_______

.. code-block:: php

   <?php
   
   print_r(explode('', 'abc')); // Not possible with an empty delimiter
   
   print_r(str_split(1, 'abc')); 
   
   ?>

Solutions
_________

+ Use str_split() to split the string into individual characters.
+ Access to the different elements.

See Also
________

+ `Converting String to Array in PHP Using Different Methods <https://www.simplilearn.com/tutorials/php-tutorial/string-to-array-in-php>`_
+ `Empty delimeter on 3v4l <https://3v4l.org/MetTo>`_
