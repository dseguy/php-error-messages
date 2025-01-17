.. _class-%s-contains-%d-abstract-method%s-and-must-therefore-be-declared-abstract-or-implement-the-remaining-methods:

Class %s contains %d abstract method%s and must therefore be declared abstract or implement the remaining methods
-----------------------------------------------------------------------------------------------------------------
 
	.. meta::
		:description:
			Class %s contains %d abstract method%s and must therefore be declared abstract or implement the remaining methods: A long as there is one absract method in a class, the whole class must be declared abstract.

	    :og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Class %s contains %d abstract method%s and must therefore be declared abstract or implement the remaining methods
		:og:description: A long as there is one absract method in a class, the whole class must be declared abstract
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/class-%25s-contains-%25d-abstract-method%25s-and-must-therefore-be-declared-abstract-or-implement-the-remaining-methods.html
	    :og:locale: en

	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Class %s contains %d abstract method%s and must therefore be declared abstract or implement the remaining methods
	:twitter:description: Class %s contains %d abstract method%s and must therefore be declared abstract or implement the remaining methods: A long as there is one absract method in a class, the whole class must be declared abstract
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
Description
___________
 
A long as there is one absract method in a class, the whole class must be declared abstract. That way, it cannot be instantiated: if a method is missing a body for execution, this definitely must be impossible.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       abstract function foo() ; 
   }
   
   ?>


Literal Examples
****************
+ Class X contains 1 abstract method and must therefore be declared abstract or implement the remaining methods

Solutions
_________

+ Remove the abstract option on the method(s) and give the a body block.
+ Add the abstract keyword to the class.

Related Error Messages
______________________

+ :ref:`non-abstract-method-%s::%s()-must-contain-body`
