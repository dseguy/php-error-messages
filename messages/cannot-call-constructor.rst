.. _cannot-call-constructor:

Cannot call constructor
-----------------------
 
.. meta::
	:description:
		Cannot call constructor: When there is no need to define a constructor, it may be skipped.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot call constructor
	:og:description: When there is no need to define a constructor, it may be skipped
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-call-constructor.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot call constructor
	:twitter:description: Cannot call constructor: When there is no need to define a constructor, it may be skipped
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
When there is no need to define a constructor, it may be skipped. Then, PHP creates the object without that initial method call.

On the other hand, if a child class makes an explicit call to the parent constructor, then on of the parents MUST have a constructor. 

In the example here, the child class explicitely calls the parent constructor, but it doesn't exists.

Example
_______

.. code-block:: php

   <?php
   
   class X {}
   
   class Y extends X {
   	function __construct() {
   		parent::__construct();
   	}
   }
   
   ?>

Solutions
_________

+ Create an empty constructure in a parent, to ensure its calling.
+ Skip the call to the parent constructor in the child: it is useless anyway.
