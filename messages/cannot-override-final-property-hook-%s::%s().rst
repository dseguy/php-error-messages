.. _cannot-override-final-property-hook-%s::%s():

Cannot override final property hook %s::%s()
--------------------------------------------
 
.. meta::
	:description:
		Cannot override final property hook %s::%s(): Property hooks may be declared final, just like any other methods.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot override final property hook %s::%s()
	:og:description: Property hooks may be declared final, just like any other methods
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-override-final-property-hook-%25s%3A%3A%25s%28%29.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot override final property hook %s::%s()
	:twitter:description: Cannot override final property hook %s::%s(): Property hooks may be declared final, just like any other methods
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
Property hooks may be declared final, just like any other methods. In that case, it is not possible to override then with a new definition in a child class. 

The property may be declared final as whole, in the property definition; otherwise, each individual hook may be declared final. 

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	public $property {
   		final get => 2;
   		set => $this->property = $value;
   	}
   	// No hook can be changed
   	public final $q {
   		get => 2;
   	}
   }
   
   class Y extends X {
   	public final $property {
   		get => 3;                 // This one cannot be overriden
   		set => $this->property = $value; // This one is OK
   	}
   	public final $q {
   		get => 2;
   	}
   }
   
   ?>


Literal Examples
****************
+ Cannot override final property hook $p::get()

Solutions
_________

+ Remove the final keyword on the parent hook.
+ Remove the hook in the child class.
