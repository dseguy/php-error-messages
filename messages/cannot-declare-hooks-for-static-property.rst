.. _cannot-declare-hooks-for-static-property:

Cannot declare hooks for static property
----------------------------------------
 
	.. meta::
		:description:
			Cannot declare hooks for static property: Static properties cannot have a property hook.

	    :og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Cannot declare hooks for static property
		:og:description: Static properties cannot have a property hook
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-declare-hooks-for-static-property.html
	    :og:locale: en

	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot declare hooks for static property
	:twitter:description: Cannot declare hooks for static property: Static properties cannot have a property hook
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
Description
___________
 
Static properties cannot have a property hook. This feature is not supported. 

Example
_______

.. code-block:: php

   <?php
   
   class X
   {
       public static string $property {
           set => $this->property . _1;
   
           SET {
               $this->property = $value;
           }
       }
   }
   ?>

Solutions
_________

+ Make the property non-static.
+ Create accessors for the static property.
