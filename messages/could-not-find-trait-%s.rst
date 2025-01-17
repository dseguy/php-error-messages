.. _could-not-find-trait-%s:

Could not find trait %s
-----------------------
 
.. meta::
	:description:
		Could not find trait %s: A trait is named in a use expression inside a class, but it doesn&#039;t exist, or is not yet loaded by PHP.
		:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Could not find trait %s
		:og:description: A trait is named in a use expression inside a class, but it doesn&#039;t exist, or is not yet loaded by PHP
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/could-not-find-trait-%25s.html
	    :og:locale: en
		:twitter:card: summary_large_image
		:twitter:site: @exakat
		:twitter:title: Could not find trait %s
		:twitter:description: Could not find trait %s: A trait is named in a use expression inside a class, but it doesn't exist, or is not yet loaded by PHP
		:twitter:creator: @exakat
		:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
A trait is named in a use expression inside a class, but it doesn't exist, or is not yet loaded by PHP. 

The trait may be included in a different use expression. Then, it generates a distinct error message. 

Note that when the trait exists and is known to PHP, there is a distinct error message.

Example
_______

.. code-block:: php

   <?php
   trait A {
       public function foo(){}
   }
   
   class B {
       use A {
           C::foo as tf;
       }
   }
   
   ?>


Literal Examples
****************
+ Could not find trait C

Solutions
_________

+ Remove the expression that mentions the non-existing trait.
+ Create the missing trait.
+ Add the trait to the class.
