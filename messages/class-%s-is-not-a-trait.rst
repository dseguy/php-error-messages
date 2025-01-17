.. _class-%s-is-not-a-trait:

Class %s is not a trait, Only traits may be used in 'as' and 'insteadof' statements
-----------------------------------------------------------------------------------
 
	.. meta::
		:description:
			Class %s is not a trait, Only traits may be used in 'as' and 'insteadof' statements: It is not possible to use a class name in a use block: the block only uses traits information.

	    :og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Class %s is not a trait, Only traits may be used in &#039;as&#039; and &#039;insteadof&#039; statements
		:og:description: It is not possible to use a class name in a use block: the block only uses traits information
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/class-%25s-is-not-a-trait.html
	    :og:locale: en

	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Class %s is not a trait, Only traits may be used in 'as' and 'insteadof' statements
	:twitter:description: Class %s is not a trait, Only traits may be used in 'as' and 'insteadof' statements: It is not possible to use a class name in a use block: the block only uses traits information
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
Description
___________
 
It is not possible to use a class name in a use block: the block only uses traits information. 

The class method have priority over the trait methods, so there is no need to explicitly solve such conflict. On the other hand, when the trait has to have priority, it has to be specified as such, using a trait name. 

Any method defined in a parent class is assimilated to the current class, and has priority. 


Example
_______

.. code-block:: php

   <?php
   
   class X {}
   
   trait T {}
   
   class Y extends X {
   	use T{ X::foo instead of T; }; 
   }
   ?>


Literal Examples
****************
+ Class x is not a trait, Only traits may be used in 'as' and 'insteadof' statements

Solutions
_________

+ Remove the use block entry that mentions the class.
+ Fix the name of the class, with the name of a trait.
