.. _method-%s::%s()-must-be-static:

Method %s::%s() must be static
------------------------------
 
.. meta::
	:description:
		Method %s::%s() must be static: The magic methods ``__set_state`` and ``__callStatic`` must be static.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Method %s::%s() must be static
	:og:description: The magic methods ``__set_state`` and ``__callStatic`` must be static
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/method-%25s%3A%3A%25s%28%29-must-be-static.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Method %s::%s() must be static
	:twitter:description: Method %s::%s() must be static: The magic methods ``__set_state`` and ``__callStatic`` must be static
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/method-%s::%s()-must-be-static.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/method-%s::%s()-must-be-static.html","name":"Method %s::%s() must be static","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 24 Mar 2025 17:47:46 +0000","dateModified":"Mon, 24 Mar 2025 17:47:46 +0000","description":"The magic methods ``__set_state`` and ``__callStatic`` must be static","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/method-%s::%s()-must-be-static.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The magic methods ``__set_state`` and ``__callStatic`` must be static. These are the only magic methods that must be static.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       function __set_state($state) {}
   }
   ?>

Solutions
_________

+ Add ``static`` to the method signature, and remove all ``$this`` in its body.
+ Remove the methods.
