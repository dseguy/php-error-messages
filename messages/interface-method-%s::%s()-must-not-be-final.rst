.. _interface-method-%s::%s()-must-not-be-final:

Interface method %s::%s() must not be final
-------------------------------------------
 
.. meta::
	:description:
		Interface method %s::%s() must not be final: A method in an interface cannot be ``final``, as it has to be implemented: it is actually ``abstract``.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Interface method %s::%s() must not be final
	:og:description: A method in an interface cannot be ``final``, as it has to be implemented: it is actually ``abstract``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/interface-method-%25s%3A%3A%25s%28%29-must-not-be-final.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Interface method %s::%s() must not be final
	:twitter:description: Interface method %s::%s() must not be final: A method in an interface cannot be ``final``, as it has to be implemented: it is actually ``abstract``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/interface-method-%s::%s()-must-not-be-final.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/interface-method-%s::%s()-must-not-be-final.html","name":"Interface method %s::%s() must not be final","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Nov 2025 18:27:24 +0000","dateModified":"Wed, 05 Nov 2025 18:27:24 +0000","description":"A method in an interface cannot be ``final``, as it has to be implemented: it is actually ``abstract``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/interface-method-%s::%s()-must-not-be-final.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A method in an interface cannot be ``final``, as it has to be implemented: it is actually ``abstract``. The same method, in the implementing class, may be ``final``.

Example
_______

.. code-block:: php

   <?php
   
   interface X {
       final function foo();
   }
   
   ?>


Literal Examples
****************
+ Interface method X::foo() must not be final

Solutions
_________

+ Remove the ``final`` option in the interface, add it to any implementing class, or its children.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
