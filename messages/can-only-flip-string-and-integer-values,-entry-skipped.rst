.. _can-only-flip-string-and-integer-values,-entry-skipped:

Can only flip string and integer values, entry skipped
------------------------------------------------------
 
.. meta::
	:description:
		Can only flip string and integer values, entry skipped: array_flip() converts values into keys and keys into values.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Can only flip string and integer values, entry skipped
	:og:description: array_flip() converts values into keys and keys into values
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/can-only-flip-string-and-integer-values%2C-entry-skipped.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Can only flip string and integer values, entry skipped
	:twitter:description: Can only flip string and integer values, entry skipped: array_flip() converts values into keys and keys into values
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
array_flip() converts values into keys and keys into values. The former values undergo a process to convert them to valid keys, which are strings or integers. 

In general, non-scalar values cannot be converted, and are skipped: this is the case of arrays.

In particular, string or integer backed enumerations and stringeable objects are not converted to strings. This applies with or without strict_types.


Example
_______

.. code-block:: php

   <?php
   
   array_flip([[1], E::A, new X])
   
   enum E : string {
       case A = 'a';
   }
   
   class X implements Stringeable {
       function __toString() {
           return 'X';
       }
   }
   
   
   ?>

Solutions
_________

+ Force the type to be string when building the array.
+ Apply a converting method with array_map(), before calling array_filter.
