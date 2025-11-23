.. _anonymous-class-method-%s()-must-not-be-abstract:

Anonymous class method %s() must not be abstract
------------------------------------------------
 
.. meta::
	:description:
		Anonymous class method %s() must not be abstract: An anonymous class cannot have an abstract method, as the class is actually immediately instantiate, while abstract class, and classes that contains an abstract method cannot be instantiated.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Anonymous class method %s() must not be abstract
	:og:description: An anonymous class cannot have an abstract method, as the class is actually immediately instantiate, while abstract class, and classes that contains an abstract method cannot be instantiated
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/anonymous-class-method-%25s%28%29-must-not-be-abstract.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Anonymous class method %s() must not be abstract
	:twitter:description: Anonymous class method %s() must not be abstract: An anonymous class cannot have an abstract method, as the class is actually immediately instantiate, while abstract class, and classes that contains an abstract method cannot be instantiated
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/anonymous-class-method-%s()-must-not-be-abstract.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/anonymous-class-method-%s()-must-not-be-abstract.html","name":"Anonymous class method %s() must not be abstract","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 07 Nov 2025 09:23:16 +0000","dateModified":"Fri, 07 Nov 2025 09:23:16 +0000","description":"An anonymous class cannot have an abstract method, as the class is actually immediately instantiate, while abstract class, and classes that contains an abstract method cannot be instantiated","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/anonymous-class-method-%s()-must-not-be-abstract.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
An anonymous class cannot have an abstract method, as the class is actually immediately instantiate, while abstract class, and classes that contains an abstract method cannot be instantiated.

This error was also detected previously, with a more generic error message.

Example
_______

.. code-block:: php

   <?php
   
   new class() {
       abstract function foo();
   }
   
   ?>


Literal Examples
****************
+ Anonymous class method foo() must not be abstract

Solutions
_________

+ Remove the abstract method.
+ Add a body to the abstract method, and remove the abstract option.

Related Error Messages
______________________

+ :ref:`class-%s-contains-%d-abstract-method%s-and-must-therefore-be-declared-abstract-or-implement-the-remaining-methods`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
