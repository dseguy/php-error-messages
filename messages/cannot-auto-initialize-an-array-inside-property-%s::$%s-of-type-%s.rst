.. _cannot-auto-initialize-an-array-inside-property-%s::\$%s-of-type-%s:

Cannot auto-initialize an array inside property %s::$%s of type %s
------------------------------------------------------------------
 
.. meta::
	:description:
		Cannot auto-initialize an array inside property %s::$%s of type %s: The last command is using the array syntax on the property ``$property``.
		:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Cannot auto-initialize an array inside property %s::$%s of type %s
		:og:description: The last command is using the array syntax on the property ``$property``
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-auto-initialize-an-array-inside-property-%25s%3A%3A%24%25s-of-type-%25s.html
	    :og:locale: en
		:twitter:card: summary_large_image
		:twitter:site: @exakat
		:twitter:title: Cannot auto-initialize an array inside property %s::$%s of type %s
		:twitter:description: Cannot auto-initialize an array inside property %s::$%s of type %s: The last command is using the array syntax on the property ``$property``
		:twitter:creator: @exakat
		:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
The last command is using the array syntax on the property ``$property``. In fact, the property is of type ``bool``. 

If this was a variable, this would be tolerated, but it cannot happen on a property, which enforces the types at all times. 

Indeed, if the union type ``bool|array`` is used, the automatic conversion to array is reported.

When the type of the property is ``string``, the array syntax is partially supported: it works with integer index, and fails with strings.


Example
_______

.. code-block:: php

   <?php
   
   class X {
       public bool $property = false;
   }
   
   $x = new X;
   $x->property[4] = 3;
   
   ?>


Literal Examples
****************
+ Cannot auto-initialize an array inside property X::$property of type bool
+ Cannot auto-initialize an array inside property X::$property of type int

Solutions
_________

+ Convert the type of the property to array.
+ Create a distinct property, with the array type, to use the array syntax.

Related Error Messages
______________________

+ :ref:`cannot-access-offset-of-type-%s-on-%s`
+ :ref:`automatic-conversion-of-false-to-array-is-deprecated`
