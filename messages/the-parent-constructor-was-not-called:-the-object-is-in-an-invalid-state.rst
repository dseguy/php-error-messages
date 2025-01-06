.. _the-parent-constructor-was-not-called:-the-object-is-in-an-invalid-state:

The parent constructor was not called: the object is in an invalid state
------------------------------------------------------------------------
 
	.. meta::
		:description:
			The parent constructor was not called: the object is in an invalid state: When extending certain PHP native classes, the child class must call the parent constructor to finish the instantiation of the object.

		:og:type: article
		:og:title: The parent constructor was not called: the object is in an invalid state
		:og:description: When extending certain PHP native classes, the child class must call the parent constructor to finish the instantiation of the object
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/the-parent-constructor-was-not-called%3A-the-object-is-in-an-invalid-state.html

Description
___________
 
When extending certain PHP native classes, the child class must call the parent constructor to finish the instantiation of the object.

The problem is not detected at instantiation time, but later, as soon as any of the parent resources are used, but found to be in invalid state.

PHP does not automatically call the parent constructor when creating a child instance. It must be explicit in the code. 

Some classes that needs such initialisation are: ``SplFileObject``, ``SplDirectory``, ``GlobIterator``. The list is not exhaustive.

Example
_______

.. code-block:: php

   <?php
   // PHP bug 8318
   class bug8318 extends \SplFileObject
   {
       public function __construct()
       {
       }
   
       public function fpassthru(): int
       {
           return 0;
       }
   }
   
   $cl = new bug8318;
   try {
       $cl->fpassthru();
   } catch (\Error $e) {
       var_dump($e);
   }
   ?>

Solutions
_________

+ Call the parent constructor.
+ Use another parent class.
