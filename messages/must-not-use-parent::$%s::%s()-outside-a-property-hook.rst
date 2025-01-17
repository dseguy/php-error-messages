.. _must-not-use-parent::\$%s::%s()-outside-a-property-hook:

Must not use parent::$%s::%s() outside a property hook 
-------------------------------------------------------
 
.. meta::
	:description:
		Must not use parent::$%s::%s() outside a property hook : Property hooks are actual methods: they can call other methods to fulfill their mission.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Must not use parent::$%s::%s() outside a property hook 
	:og:description: Property hooks are actual methods: they can call other methods to fulfill their mission
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/must-not-use-parent%3A%3A%24%25s%3A%3A%25s%28%29-outside-a-property-hook.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Must not use parent::$%s::%s() outside a property hook 
	:twitter:description: Must not use parent::$%s::%s() outside a property hook : Property hooks are actual methods: they can call other methods to fulfill their mission
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
Property hooks are actual methods: they can call other methods to fulfill their mission. They may also call the parent' methods, and, as such, they may also call the parent's property hook. This has lead to the syntax ``parent::$properpty::get()``.

This syntax is specific to property hooks, and can only be used inside the same property hook for the same property.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       public string $q { 
           get => 'in parent';
       }
   }
   
   class Y extends X {
       public string $q { 
           get => parent::$q::get();
       }
       
       function foo(): string {
           // Must not use parent::$q::get() outside a property hook
           return parent::$q::get();
       }
   }
   
   $objectY = new X;
   echo $objectY->q;
   
   ?>


Literal Examples
****************
+ Must not use parent::$q::get() outside a property hook

Solutions
_________

+ Move the block of the property hook in a regular method and call it from the hook and other methods.
+ Inline the code every time it is needed.

Related Error Messages
______________________

+ :ref:`must-not-use-parent::$%s::%s()-in-a-different-property-($%s)`
+ :ref:`must-not-use-parent::$%s::%s()-in-a-different-property-hook-(%s)`
