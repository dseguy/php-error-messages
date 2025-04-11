.. _cannot-access-parent::-when-current-class-scope-has-no-parent:

Cannot access parent:: when current class scope has no parent
-------------------------------------------------------------
 
.. meta::
	:description:
		Cannot access parent:: when current class scope has no parent: The trait X has a property, which is typed with a relative type: ``parent``.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot access parent:: when current class scope has no parent
	:og:description: The trait X has a property, which is typed with a relative type: ``parent``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-access-parent%3A%3A-when-current-class-scope-has-no-parent.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot access parent:: when current class scope has no parent
	:twitter:description: Cannot access parent:: when current class scope has no parent: The trait X has a property, which is typed with a relative type: ``parent``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-access-parent::-when-current-class-scope-has-no-parent.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-access-parent::-when-current-class-scope-has-no-parent.html","name":"Cannot access parent:: when current class scope has no parent","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"The trait X has a property, which is typed with a relative type: ``parent``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-access-parent::-when-current-class-scope-has-no-parent.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The trait X has a property, which is typed with a relative type: ``parent``. Yet, as a trait, there is no parent class possible. 

This situation is solved when the trait is ``use`` d in a class, as long as the class has a parent. But it is not possible directly on the trait.

This error is now covered with the upcoming deprecation of direct manipulation of static properties on a trait, without using its host class. 

This error is also possible with ``self``. It is not possible with static, as properties can't be typed static. 

This error is also possible on interfaces.

Example
_______

.. code-block:: php

   <?php
   
   trait X {
       public static parent $property;
   }
   
   try {
       Test::$property = new stdClass;
   } catch (Error $e) {
       echo $e->getMessage(), PHP_EOL;
   }
   
   ?>

Solutions
_________

+ Do not use ``parent`` or ``self`` keywords in interfaces. Use an actual class name.
+ Do not use ``parent`` or ``self`` keywords in traits. Use an actual class name.
+ Do not use ``parent`` or ``self`` keywords in enumerations. Use an actual class name.
