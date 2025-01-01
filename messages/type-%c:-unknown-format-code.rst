.. _type-%c:-unknown-format-code:

Type %c: unknown format code
----------------------------
 
	.. meta::
		:description:
			Type %c: unknown format code: pack() and unpack() convert data between a string representation and another.

		:og:type: article
		:og:title: Type %c: unknown format code
		:og:description: pack() and unpack() convert data between a string representation and another
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/type-%25c%3A-unknown-format-code.html

Description
___________
 
pack() and unpack() convert data between a string representation and another. They both use a format string, passed as first argument, that specifies how the datat of the second argument are transformed. This format string uses a limited set of letters (and ``@``) to express these transformation. Any other character is not recognized and produces this error.

The valid characters are : ``a, A, h, H, c, C, s, S, n, v, i, I, l, L, N, V, q, Q, J, P, f, g, G, d, e, E, x, X, Z, @`` 

The format is checked after collecting the parameters, and before attempting the transformation. 

Example
_______

.. code-block:: php

   <?php
   
   $array = unpack("z", $someData);
   
   ?>


Literal Examples
****************
+ Type z: unknown format code

Solutions
_________

+ Remove the unknown characters.
+ Fix the unknown character with a valid one.

See Also
________

+ `List of valid characters <https://www.php.net/pack>`_
