.. _assignments-can-only-happen-to-writable-values:

Assignments can only happen to writable values
----------------------------------------------
 
.. meta::
	:description:
		Assignments can only happen to writable values: With the list() operator, the right part of the =&gt; operator must be a variable or equivalent.
		:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Assignments can only happen to writable values
		:og:description: With the list() operator, the right part of the =&gt; operator must be a variable or equivalent
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/assignments-can-only-happen-to-writable-values.html
	    :og:locale: en
		:twitter:card: summary_large_image
		:twitter:site: @exakat
		:twitter:title: Assignments can only happen to writable values
		:twitter:description: Assignments can only happen to writable values: With the list() operator, the right part of the => operator must be a variable or equivalent
		:twitter:creator: @exakat
		:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
With the list() operator, the right part of the => operator must be a variable or equivalent. The corresponding value on the right part of the assignation will be stored there, so it has to be a data container. It is possible to use a variable, property (static or not), an array element or an array append. 

The same error may happen when the property is not available: this may be the case with a nullsafe operator.

This is valid with or without the index part, in the list() call.

Example
_______

.. code-block:: php

   <?php
   
   // short array syntax : the left part is not an array, but a list()
   [1] = [2];
   ['a' => 1] = ['a' => 2];
   
   list('a' => 1) = array('a' => 2);
   
   // ?-> may be returning null, and not a valid container.
   [$foo?->bar->baz] = ['bar'];
   
   ?>

Solutions
_________

+ Use a variable.
+ Use an array append.
+ Use a a property.
