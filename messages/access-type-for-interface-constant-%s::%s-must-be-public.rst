.. _access-type-for-interface-constant-%s::%s-must-be-public:

Access type for interface constant %s::%s must be public
--------------------------------------------------------
 
.. meta::
	:description:
		Access type for interface constant %s::%s must be public: An method or a constant, that are defined in an interface, must appear as ``public`` in all the implementing classes.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Access type for interface constant %s::%s must be public
	:og:description: An method or a constant, that are defined in an interface, must appear as ``public`` in all the implementing classes
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/access-type-for-interface-constant-%25s%3A%3A%25s-must-be-public.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Access type for interface constant %s::%s must be public
	:twitter:description: Access type for interface constant %s::%s must be public: An method or a constant, that are defined in an interface, must appear as ``public`` in all the implementing classes
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/access-type-for-interface-constant-%s::%s-must-be-public.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/access-type-for-interface-constant-%s::%s-must-be-public.html","name":"Access type for interface constant %s::%s must be public","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"An method or a constant, that are defined in an interface, must appear as ``public`` in all the implementing classes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/access-type-for-interface-constant-%s::%s-must-be-public.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
An method or a constant, that are defined in an interface, must appear as ``public`` in all the implementing classes. They cannot be made ``protected`` or ``private``, as they would be no accessible.

Example
_______

.. code-block:: php

   <?php
   
   interface I {
       private const C = 1;
   }
   
   ?>


Literal Examples
****************
+ Access type for interface constant I::C must be public

Solutions
_________

+ Set the visibility to public in the interface.
+ Remove the visibility in the interface.
+ Remove the constant in the interface.

Related Error Messages
______________________

+ :ref:`access-type-for-interface-method-%s::%s()-must-be-public`
