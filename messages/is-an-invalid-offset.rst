.. _is-an-invalid-offset:

is an invalid offset
--------------------
 
	.. meta::
		:description:
			is an invalid offset: The requested value could not be found in the underlying array.

		:og:type: article
		:og:title: is an invalid offset
		:og:description: The requested value could not be found in the underlying array
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/is-an-invalid-offset.html

Description
___________
 
The requested value could not be found in the underlying array. 

Indeed, the ``SplDoublyLinkedList`` has only 3 elements, none with the ``4`` index. 

The problem also arise when using ``add`` method, with an index that is negative, or beyond the current last element of the list.

Traditional PHP ``array`` do not report this error: they return ``null``, with the ``Undefined array key`` warning.

Example
_______

.. code-block:: php

   <?php
   
   $a = new SplDoublyLinkedList();
   $array = [1,2,3];
   
   foreach($array as $k => $v){
       $a->add($k,$v);
       
       // error when writing on an index out of bound
       // the first $k + 1 is beyond the count of the list (0), and fails.
       $a->add($k + 1,$v);
   }
   
   // error when accessing an index out of bound
   print $a[4];
   
   ?>
   


Literal Examples
****************
+ SplDoublyLinkedList::add(): Argument #1 ($index) is out of range

Solutions
_________

+ Check that the index in positive, and below the current number of elements in the list.

Related Error Messages
______________________

+ :ref:`undefined-array-key`
