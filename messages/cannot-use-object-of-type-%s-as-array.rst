.. _cannot-use-object-of-type-%s-as-array:

Cannot use object of type %s as array
-------------------------------------
 
.. meta::
	:description:
		Cannot use object of type %s as array: An object is not an array: as such, it cannot use the array syntax ``[1]``, based on square brackets, but the object syntax, with the object operators ``-&gt;`` and ``.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use object of type %s as array
	:og:description: An object is not an array: as such, it cannot use the array syntax ``[1]``, based on square brackets, but the object syntax, with the object operators ``-&gt;`` and ``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-object-of-type-%25s-as-array.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use object of type %s as array
	:twitter:description: Cannot use object of type %s as array: An object is not an array: as such, it cannot use the array syntax ``[1]``, based on square brackets, but the object syntax, with the object operators ``->`` and ``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-object-of-type-%s-as-array.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-object-of-type-%s-as-array.html","name":"Cannot use object of type %s as array","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"An object is not an array: as such, it cannot use the array syntax ``[1]``, based on square brackets, but the object syntax, with the object operators ``->`` and ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-object-of-type-%s-as-array.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
An object is not an array: as such, it cannot use the array syntax ``[1]``, based on square brackets, but the object syntax, with the object operators ``->`` and ``?->``.

A class may be made compatible with the array syntax, by implementing the ArrayAccess. Then, it is possible to use the array syntax. 

The scalar types are also forbidden to use the array syntax, although they are currently generating a warning, while the same error yields a Fatal Error.

Example
_______

.. code-block:: php

   <?php
   
   class X {}
   
   $x = new X;
   echo $x[0];
   
   ?>


Literal Examples
****************
+ Cannot use object of type x as array

Solutions
_________

+ Cast the object to array before using the array syntax.
+ Implement the ArrayAccess interface on the class.
+ Use the object operators on the object.

Related Error Messages
______________________

+ :ref:`trying-to-access-array-offset-on-%s`

See Also
________

+ `ArrayAccess <https://www.php.net/manual/en/class.arrayaccess.php>`_
