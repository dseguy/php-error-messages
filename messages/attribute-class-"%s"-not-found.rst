.. _attribute-class-"%s"-not-found:

Attribute class "%s" not found
------------------------------
 
.. meta::
	:description:
		Attribute class "%s" not found: This error reports that a class was not found.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Attribute class &quot;%s&quot; not found
	:og:description: This error reports that a class was not found
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/attribute-class-%5C%22%25s%5C%22-not-found.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Attribute class "%s" not found
	:twitter:description: Attribute class "%s" not found: This error reports that a class was not found
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
This error reports that a class was not found. This is also focusing on attribute classes. 

Class are reported as not found when they are used, so this error message is displayed when the attribute is actually used in the code, by calling the ``getInstance`` reflection. An attribute might exists without its underlying class, as long as it is not instanciated.


Example
_______

.. code-block:: php

   <?php
   
   #[X] 
   function f() { }
   
   $ref = new \ReflectionFunction('\f');
   
   try {
       $ref->getAttributes()[0]->newInstance();
   } catch (\Error $e) {
       var_dump($e->getMessage());
   }
   ?>


Literal Examples
****************
+ Attribute class "Deprecated" not found

Solutions
_________

+ Check spelling and namespace for that class.
+ Create the associated class.
+ Avoid using getInstance() on that attribute.

Related Error Messages
______________________

+ :ref:`class-\"%s\"-not-found`
