.. _access-type-for-interface-method-%s::%s()-must-be-public:

Access type for interface method %s::%s() must be public
--------------------------------------------------------
 
.. meta::
	:description:
		Access type for interface method %s::%s() must be public: An method, that is defined in an interface, must appear as ``public``.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Access type for interface method %s::%s() must be public
	:og:description: An method, that is defined in an interface, must appear as ``public``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/access-type-for-interface-method-%25s%3A%3A%25s%28%29-must-be-public.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Access type for interface method %s::%s() must be public
	:twitter:description: Access type for interface method %s::%s() must be public: An method, that is defined in an interface, must appear as ``public``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/access-type-for-interface-method-%s::%s()-must-be-public.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/access-type-for-interface-method-%s::%s()-must-be-public.html","name":"Access type for interface method %s::%s() must be public","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"An method, that is defined in an interface, must appear as ``public``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/access-type-for-interface-method-%s::%s()-must-be-public.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
An method, that is defined in an interface, must appear as ``public``. They cannot be made ``protected`` or ``private``, as they would be no accessible.

Example
_______

.. code-block:: php

   <?php
   
   interface I {
       private function foo();
       
       protected const C = 1;
   }
   
   ?>


Literal Examples
****************
+ Access type for interface method I::foo() must be public

Solutions
_________

+ Set the visibility to public in the interface.
+ Remove the visibility in the interface.

Related Error Messages
______________________

+ :ref:`access-type-for-interface-constant-%s::%s-must-be-public`
