.. _%s-virtual-property-%s::\$%s-must-not-specify-asymmetric-visibility:

%s virtual property %s::$%s must not specify asymmetric visibility
------------------------------------------------------------------
 
.. meta::
	:description:
		%s virtual property %s::$%s must not specify asymmetric visibility: A virtual property is related to property hooks: it is a property whose hook do not use the underlying property for storage, but uses another one (or, like here, none).
		:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: %s virtual property %s::$%s must not specify asymmetric visibility
		:og:description: A virtual property is related to property hooks: it is a property whose hook do not use the underlying property for storage, but uses another one (or, like here, none)
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s-virtual-property-%25s%3A%3A%24%25s-must-not-specify-asymmetric-visibility.html
	    :og:locale: en
		:twitter:card: summary_large_image
		:twitter:site: @exakat
		:twitter:title: %s virtual property %s::$%s must not specify asymmetric visibility
		:twitter:description: %s virtual property %s::$%s must not specify asymmetric visibility: A virtual property is related to property hooks: it is a property whose hook do not use the underlying property for storage, but uses another one (or, like here, none)
		:twitter:creator: @exakat
		:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
A virtual property is related to property hooks: it is a property whose hook do not use the underlying property for storage, but uses another one (or, like here, none). 

When the set or get visibility doesn't apply, this error is displayed. The error message may start with ``Read-only`` or ``Write-only``.



Example
_______

.. code-block:: php

   <?php
   
   class X {
   	public private(set) int $p {
   		set {}
   	}
   }
   
   class Y {
   	public private(set) int $p {
   		get {}
   	}
   }
   
   ?>


Literal Examples
****************
+ Write-only virtual property X::$p must not specify asymmetric visibility
+ Readonly-only virtual property Y::$p must not specify asymmetric visibility

Solutions
_________

+ Remove the asymmetric visibility from the definition of the property.
+ Remove the property hook from the definition of the property.
+ Remove the virtual property, by making the property hook use the underlying property.
