.. _must-not-use-parent::\$%s::%s()-in-a-different-property-hook-(%s):

Must not use parent::$%s::%s() in a different property hook (%s)
----------------------------------------------------------------
 
.. meta::
	:description:
		Must not use parent::$%s::%s() in a different property hook (%s): Property hooks are actual methods: they can call other methods to fulfill their mission.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Must not use parent::$%s::%s() in a different property hook (%s)
	:og:description: Property hooks are actual methods: they can call other methods to fulfill their mission
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/must-not-use-parent%3A%3A%24%25s%3A%3A%25s%28%29-in-a-different-property-hook-%28%25s%29.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Must not use parent::$%s::%s() in a different property hook (%s)
	:twitter:description: Must not use parent::$%s::%s() in a different property hook (%s): Property hooks are actual methods: they can call other methods to fulfill their mission
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/must-not-use-parent::$%s::%s()-in-a-different-property-hook-(%s).html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/must-not-use-parent::$%s::%s()-in-a-different-property-hook-(%s).html","name":"Must not use parent::$%s::%s() in a different property hook (%s)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 30 Dec 2024 09:32:04 +0000","dateModified":"Mon, 30 Dec 2024 09:32:04 +0000","description":"Property hooks are actual methods: they can call other methods to fulfill their mission","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/must-not-use-parent::$%s::%s()-in-a-different-property-hook-(%s).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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
           // Must not use parent::$q::get() in a different property hook ($p)
           set => parent::$q::get();
       }
   }
   
   $y = new Y;
   echo $y->q;
   
   ?>


Literal Examples
****************
+ Must not use parent::$q::get() in a different property hook ($p)

Solutions
_________

+ Move the block of the property hook in a regular method and call it from the hook and other methods.
+ Inline the code every time it is needed.

Related Error Messages
______________________

+ :ref:`must-not-use-parent::$%s::%s()-in-a-different-property-($%s)`
+ :ref:`must-not-use-parent::$%s::%s()-outside-a-property-hook`
