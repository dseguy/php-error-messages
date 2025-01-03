.. _unknown-format-specifier-"%c:

Unknown format specifier "%c
----------------------------
 
	.. meta::
		:description:
			Unknown format specifier "%c: printf() accepts a string of formats, as the first arguments.

		:og:type: article
		:og:title: Unknown format specifier &quot;%c
		:og:description: printf() accepts a string of formats, as the first arguments
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/unknown-format-specifier-%22%25c.html

Description
___________
 
printf() accepts a string of formats, as the first arguments. A format is a ``%`` character, followed by a letter. Some letters are not allowed: ``a, i, j, k, l, m, n, p, q, r, t, v, w, y, z, A, B, C, D, I, J, K, L, M, N, O, P, Q, R, S, T, U, V, W, Y, Z``

Example
_______

.. code-block:: php

   <?php
   
       printf(\%we3e\\, 123); 
       //Unknown format specifier \w\\
   ?>

Solutions
_________

+ Replace the reported letter with a valid format letter.
+ Duplicate the % sign, to make it literal.
