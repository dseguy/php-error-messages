.. _property-cannot-be-both-final-and-private:

Property cannot be both final and private
-----------------------------------------
 
	.. meta::
		:description:
			Property cannot be both final and private: When a property is final, it cannot be overridden in a child class.

	    :og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Property cannot be both final and private
		:og:description: When a property is final, it cannot be overridden in a child class
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/property-cannot-be-both-final-and-private.html
	    :og:locale: en

	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Property cannot be both final and private
	:twitter:description: Property cannot be both final and private: When a property is final, it cannot be overridden in a child class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
Description
___________
 
When a property is final, it cannot be overridden in a child class; when a class is private, it is only available in the current class. 

Hence, a property cannot be final and private at the same time. 

In this situation, the property may not final, as there are no property hooks.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	final private $p;
   }
   
   ?>

Solutions
_________

+ Remove the hooks, and use the magic methods __get/__set.
+ Remove the final keyword.
+ Remove the private keyword and use protected or public.


In previous PHP versions, this error message used to be :ref:`cannot-use-the-final-modifier-on-a-property`.
