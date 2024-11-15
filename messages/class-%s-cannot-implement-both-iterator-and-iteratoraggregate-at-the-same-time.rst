.. _class-%s-cannot-implement-both-iterator-and-iteratoraggregate-at-the-same-time:

Class %s cannot implement both Iterator and IteratorAggregate at the same time
------------------------------------------------------------------------------
 
	.. meta::
		:description:
			Class %s cannot implement both Iterator and IteratorAggregate at the same time: These two interfaces are are .

		:og:type: article
		:og:title: Class %s cannot implement both Iterator and IteratorAggregate at the same time
		:og:description: These two interfaces are are 
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/class-%25s-cannot-implement-both-iterator-and-iteratoraggregate-at-the-same-time.html

Description
___________
 
These two interfaces are are 

Example
_______

.. code-block:: php

   <?php
   
   class A extends Iterator, IteratorAggregate {}
   
   ?>

Solutions
_________

+ Choose one or the other interface.
+ Use the interface that is compatible with the parent classes.
