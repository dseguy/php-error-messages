.. _an-iterator-cannot-be-used-with-foreach-by-reference:

An iterator cannot be used with foreach by reference
----------------------------------------------------
 
.. meta::
	:description:
		An iterator cannot be used with foreach by reference: It is posssible to use a foreach loop with a reference on the blind variable: this allows the original data to be modified.
		:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: An iterator cannot be used with foreach by reference
		:og:description: It is posssible to use a foreach loop with a reference on the blind variable: this allows the original data to be modified
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/an-iterator-cannot-be-used-with-foreach-by-reference.html
	    :og:locale: en
		:twitter:card: summary_large_image
		:twitter:site: @exakat
		:twitter:title: An iterator cannot be used with foreach by reference
		:twitter:description: An iterator cannot be used with foreach by reference: It is posssible to use a foreach loop with a reference on the blind variable: this allows the original data to be modified
		:twitter:creator: @exakat
		:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
It is posssible to use a foreach loop with a reference on the blind variable: this allows the original data to be modified. 

Such feature is possible with an array as a source, but it is not possible with an iterator as a source. The iterator allows reading, but has no support for writing the individual elements it emits.


Example
_______

.. code-block:: php

   <?php
   
       $heap = new SplMinHeap;
       foreach( $heap as &$item ) {}
   
   ?>

Solutions
_________

+ Turn the iterator into an array and use it.
+ Keep the blind variable per-value, and call a setter in it to update it.
+ Use objects in the iterator, it is possible to update the blind variable without the reference.
