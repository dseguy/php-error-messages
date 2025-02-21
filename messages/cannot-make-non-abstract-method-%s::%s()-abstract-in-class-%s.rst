.. _cannot-make-non-abstract-method-%s::%s()-abstract-in-class-%s:

Cannot make non abstract method %s::%s() abstract in class %s
-------------------------------------------------------------
 
.. meta::
	:description:
		Cannot make non abstract method %s::%s() abstract in class %s: Once a method has a body, it cannot be made ``abstract`` again.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot make non abstract method %s::%s() abstract in class %s
	:og:description: Once a method has a body, it cannot be made ``abstract`` again
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-make-non-abstract-method-%25s%3A%3A%25s%28%29-abstract-in-class-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot make non abstract method %s::%s() abstract in class %s
	:twitter:description: Cannot make non abstract method %s::%s() abstract in class %s: Once a method has a body, it cannot be made ``abstract`` again
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-make-non-abstract-method-%s::%s()-abstract-in-class-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-make-non-abstract-method-%s::%s()-abstract-in-class-%s.html","name":"Cannot make non abstract method %s::%s() abstract in class %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"Once a method has a body, it cannot be made ``abstract`` again","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-make-non-abstract-method-%s::%s()-abstract-in-class-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Once a method has a body, it cannot be made ``abstract`` again. 

On the other hand, the child class may be abstract, while the parent class is not. It just means that new methods must be implemented.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       function foo() {}
   }
   
   abstract class Y extends X {
       abstract function foo();
   }
   
   ?>

Solutions
_________

+ Make the child class the parent.
+ Change the name of the abstract method in the child class.
+ Remove the abstract option in the child class.
+ Add the abstract option in the parent class.
+ Make the method abstract in the parent class.
