.. _method-%s::%s()-must-be-static:

Method %s::%s() must be static
------------------------------
 
.. meta::
	:description:
		Method %s::%s() must be static: The magic method ``__set_state`` must be static.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Method %s::%s() must be static
	:og:description: The magic method ``__set_state`` must be static
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/method-%25s%3A%3A%25s%28%29-must-be-static.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Method %s::%s() must be static
	:twitter:description: Method %s::%s() must be static: The magic method ``__set_state`` must be static
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/method-%s::%s()-must-be-static.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/method-%s::%s()-must-be-static.html","name":"Method %s::%s() must be static","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 17 Jan 2025 09:02:59 +0000","dateModified":"Fri, 17 Jan 2025 09:02:59 +0000","description":"The magic method ``__set_state`` must be static","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/method-%s::%s()-must-be-static.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The magic method ``__set_state`` must be static.

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

+ Add ``static`` to the method ``__set_state`` signature, and remove all ``$this`` in its body.
+ Remove the ``__set_state`` method.
