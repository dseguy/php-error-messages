.. _cannot-declare-promoted-property-outside-a-constructor:

Cannot declare promoted property outside a constructor
------------------------------------------------------
 
.. meta::
	:description:
		Cannot declare promoted property outside a constructor: A promoted property is the declaration of a property, as part of the signature of the constructor.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot declare promoted property outside a constructor
	:og:description: A promoted property is the declaration of a property, as part of the signature of the constructor
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-declare-promoted-property-outside-a-constructor.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot declare promoted property outside a constructor
	:twitter:description: Cannot declare promoted property outside a constructor: A promoted property is the declaration of a property, as part of the signature of the constructor
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-declare-promoted-property-outside-a-constructor.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-declare-promoted-property-outside-a-constructor.html","name":"Cannot declare promoted property outside a constructor","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jan 2025 10:10:31 +0000","dateModified":"Thu, 09 Jan 2025 10:10:31 +0000","description":"A promoted property is the declaration of a property, as part of the signature of the constructor","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-declare-promoted-property-outside-a-constructor.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A promoted property is the declaration of a property, as part of the signature of the constructor. It is detected with the use of private, protected and public keyword, in the parameter signature. When these keyword are found in the signature of a method that is not the constructor, PHP emits this error.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	function foo(private int $p) {
   	
   	}
   }
   
   ?>

Solutions
_________

+ Remove the private, protected or public keyword.
+ Rename the method __construct, to make it the constructor.
+ Move that parameter to the constructor.
