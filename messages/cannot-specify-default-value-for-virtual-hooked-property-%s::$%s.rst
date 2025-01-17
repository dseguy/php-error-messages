.. _cannot-specify-default-value-for-virtual-hooked-property-%s::\$%s:

Cannot specify default value for virtual hooked property
--------------------------------------------------------
 
.. meta::
	:description:
		Cannot specify default value for virtual hooked property: It is possible to create a virtual property, by defining one accessor that doesn&#039;t refer to the defined property.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot specify default value for virtual hooked property
	:og:description: It is possible to create a virtual property, by defining one accessor that doesn&#039;t refer to the defined property
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-specify-default-value-for-virtual-hooked-property-%25s%3A%3A%24%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot specify default value for virtual hooked property
	:twitter:description: Cannot specify default value for virtual hooked property: It is possible to create a virtual property, by defining one accessor that doesn't refer to the defined property
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
It is possible to create a virtual property, by defining one accessor that doesn't refer to the defined property. In the illustration here, the ``get`` method is empty. In that case, the property's value doesn't have an impact on the operation, and the default value of that property shall not be defined.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	public int $property = 3 {
   		get {}
   	}
   }
   
   ?>

Solutions
_________

+ Remove the property hooks, to regain usage of the default value.
+ Define a property hook that makes use of the property ``$this->property``.
