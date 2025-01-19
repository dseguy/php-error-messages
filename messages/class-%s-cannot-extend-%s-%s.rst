.. _class-%s-cannot-extend-%s-%s:

Class %s cannot extend %s %s
----------------------------
 
.. meta::
	:description:
		Class %s cannot extend %s %s: A class that is marked ``final`` cannot be extended.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Class %s cannot extend %s %s
	:og:description: A class that is marked ``final`` cannot be extended
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/class-%25s-cannot-extend-%25s-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Class %s cannot extend %s %s
	:twitter:description: Class %s cannot extend %s %s: A class that is marked ``final`` cannot be extended
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
A class that is marked ``final`` cannot be extended. 

Example
_______

.. code-block:: php

   <?php
   
   final class X {}
   
   class Y extends X {}
   
   ?>
   


Literal Examples
****************
+ Class T cannot extend class X

Solutions
_________

+ Remove the ``final`` keyword on the parent class.
+ Use composition in the intended child class.
