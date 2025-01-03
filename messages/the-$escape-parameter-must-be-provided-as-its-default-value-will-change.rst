.. _the-\$escape-parameter-must-be-provided-as-its-default-value-will-change:

the $escape parameter must be provided as its default value will change
-----------------------------------------------------------------------
 
	.. meta::
		:description:
			the $escape parameter must be provided as its default value will change: The ``$escape`` parameter of various PHP functions that deal with CSV files will change in PHP 9.

		:og:type: article
		:og:title: the $escape parameter must be provided as its default value will change
		:og:description: The ``$escape`` parameter of various PHP functions that deal with CSV files will change in PHP 9
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/the-%24escape-parameter-must-be-provided-as-its-default-value-will-change.html

Description
___________
 
The ``$escape`` parameter of various PHP functions that deal with CSV files will change in PHP 9.0. The current default value is ``\`` (backslash), and it will be changed to an empty string. To be ready for that version, it is recommended to explicitely set that value, so as to preserve the previous behavior, with a ``\``, or move to the new one, with an empty string.

Example
_______

.. code-block:: php

   <?php
   
   $fp = fopen(export.csv, w);
   fputcsv($data);
   
   ?>

Solutions
_________

+ Add the 5th parameter in the fputcsv() or fgetcsv() calls.
+ Add the named parameter ``escape`` in the calls.
+ Test your application with ``escape`` set to empty string, and PHP 8.4+.

See Also
________

+ `The $escape parameter must be provided <https://php.watch/versions/8.4/csv-functions-escape-parameter>`_
+ `fputcsv() and $escape character <https://externals.io/message/100729>`_
