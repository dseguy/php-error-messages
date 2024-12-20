.. _cannot-declare-promoted-property-outside-a-constructor:

Cannot declare promoted property outside a constructor
------------------------------------------------------
 
	.. meta::
		:description:
			Cannot declare promoted property outside a constructor: A promoted property is the declaration of a property, as part of the signature of the constructor.

		:og:type: article
		:og:title: Cannot declare promoted property outside a constructor
		:og:description: A promoted property is the declaration of a property, as part of the signature of the constructor
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-declare-promoted-property-outside-a-constructor.html

Description
___________
 
A promoted property is the declaration of a property, as part of the signature of the constructor. It is detected with the use of private, protected and public keyword, in the parameter signature. When these keyword are found in the signature of a method that is not the constructor, PHP emits this error.

Example
_______

.. code-block:: php

   <?php
   
   class x {
   	function foo(private int $p) {
   	
   	}
   }
   
   ?>

Solutions
_________

+ Remove the private, protected or public keyword.
+ Rename the method __construct, to make it the constructor.
+ Move that parameter to the constructor.
