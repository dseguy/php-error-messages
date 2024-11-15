.. _invalid-characters-passed-for-attempted-conversion,-these-have-been-ignored:

Invalid characters passed for attempted conversion, these have been ignored
---------------------------------------------------------------------------
 
	.. meta::
		:description:
			Invalid characters passed for attempted conversion, these have been ignored: This error is emitted when a character outside the range of validity is used.

		:og:type: article
		:og:title: Invalid characters passed for attempted conversion, these have been ignored
		:og:description: This error is emitted when a character outside the range of validity is used
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/invalid-characters-passed-for-attempted-conversion%2C-these-have-been-ignored.html

Description
___________
 
This error is emitted when a character outside the range of validity is used. 

In the example above, the ``octdec()`` function converts a string from octal to decimal. Octals are written with figures from 0 to 8. In this case, 9 is excluded. 

The same error is emitted with the other maths bases : for example, using 'a' in a decimal, or 'X' in a hexadecimal, etc.


Example
_______

.. code-block:: php

   <?php
   
   // 9 is not an octal and can't be converted
   $decimal = octdec(342391);
   
   // same as above, but the 9 is hidden with the octal notation (starts with 0)
   $decimal = octdec(01234567);
   
   ?>

Solutions
_________

+ Check that the characters are in the correct range before attempting the conversion.
