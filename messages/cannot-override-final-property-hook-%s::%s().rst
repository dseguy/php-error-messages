.. _cannot-override-final-property-hook-%s::%s():

Cannot override final property hook %s::%s()
--------------------------------------------
 
	.. meta::
		:description:
			Cannot override final property hook %s::%s(): Property hooks may be declared final, just like any other methods.

		:og:type: article
		:og:title: Cannot override final property hook %s::%s()
		:og:description: Property hooks may be declared final, just like any other methods
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-override-final-property-hook-%25s%3A%3A%25s%28%29.html

Description
___________
 
Property hooks may be declared final, just like any other methods. In that case, it is not possible to override then with a new definition in a child class. 

The property may be declared final as whole, in the property definition; otherwise, each individual hook may be declared final. 

Example
_______

.. code-block:: php

   <?php
   
   class x {
   	public $p {
   		final get => 2;
   		set => $this->p = $value;
   	}
   	// No hook can be changed
   	public final $q {
   		get => 2;
   	}
   }
   
   class y extends x {
   	public final $p {
   		get => 3;                 // This one cannot be overriden
   		set => $this->p = $value; // This one is OK
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
