.. _cannot-instantiate-trait-%s:

Cannot instantiate trait %s
---------------------------
 
.. meta::
	:description:
		Cannot instantiate trait %s: Traits cannot be instantiated directly.
		:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Cannot instantiate trait %s
		:og:description: Traits cannot be instantiated directly
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-instantiate-trait-%25s.html
	    :og:locale: en
		:twitter:card: summary_large_image
		:twitter:site: @exakat
		:twitter:title: Cannot instantiate trait %s
		:twitter:description: Cannot instantiate trait %s: Traits cannot be instantiated directly
		:twitter:creator: @exakat
		:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
Traits cannot be instantiated directly. They need to be ``used`` in a class, or another trait, which will also need to be used in a class.

Example
_______

.. code-block:: php

   <?php
   
   trait T {}
   
   //Cannot instantiate trait T
   new T();
   
   ?>


Literal Examples
****************
+ Cannot instantiate trait t

Solutions
_________

+ Use one of the class using that trait.
+ Rewrite the trait into an class.

Related Error Messages
______________________

+ :ref:`cannot-instantiate-enum-%s`
+ :ref:`cannot-instantiate-interface-%s`
