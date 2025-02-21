.. _cannot-access-static::-when-no-class-scope-is-active:

Cannot access static:: when no class scope is active
----------------------------------------------------
 
.. meta::
	:description:
		Cannot access static:: when no class scope is active: ``static`` refers to the class that was called to access the class elements (constants, method, properties.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot access static:: when no class scope is active
	:og:description: ``static`` refers to the class that was called to access the class elements (constants, method, properties
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-access-static%3A%3A-when-no-class-scope-is-active.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot access static:: when no class scope is active
	:twitter:description: Cannot access static:: when no class scope is active: ``static`` refers to the class that was called to access the class elements (constants, method, properties
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-access-static::-when-no-class-scope-is-active.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-access-static::-when-no-class-scope-is-active.html","name":"Cannot access static:: when no class scope is active","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"``static`` refers to the class that was called to access the class elements (constants, method, properties","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-access-static::-when-no-class-scope-is-active.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``static`` refers to the class that was called to access the class elements (constants, method, properties..). As such, ``static`` can only be used inside a class or a trait.

Example
_______

.. code-block:: php

   <?php
   
   static::x;
   
   ?>

Solutions
_________

+ Move the code inside a method, in a trait or a class.
+ Use the full name of the class that should be used.


In more recent PHP versions, this error message is now :ref:`cannot-use-"static"-when-no-class-scope-is-active`.
