.. _is-an-invalid-offset:

is an invalid offset
--------------------
 
.. meta::
	:description:
		is an invalid offset: The requested value could not be found in the underlying array.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: is an invalid offset
	:og:description: The requested value could not be found in the underlying array
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/is-an-invalid-offset.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: is an invalid offset
	:twitter:description: is an invalid offset: The requested value could not be found in the underlying array
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/is-an-invalid-offset.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/is-an-invalid-offset.html","name":"is an invalid offset","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"The requested value could not be found in the underlying array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/is-an-invalid-offset.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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
