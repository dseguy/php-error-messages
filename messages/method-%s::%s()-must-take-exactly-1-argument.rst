.. _method-%s::%s()-must-take-exactly-1-argument:

Method %s::%s() must take exactly 1 argument
--------------------------------------------
 
.. meta::
	:description:
		Method %s::%s() must take exactly 1 argument: This error reports that a method requires one and only one argument.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Method %s::%s() must take exactly 1 argument
	:og:description: This error reports that a method requires one and only one argument
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/method-%25s%3A%3A%25s%28%29-must-take-exactly-1-argument.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Method %s::%s() must take exactly 1 argument
	:twitter:description: Method %s::%s() must take exactly 1 argument: This error reports that a method requires one and only one argument
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/method-%s::%s()-must-take-exactly-1-argument.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/method-%s::%s()-must-take-exactly-1-argument.html","name":"Method %s::%s() must take exactly 1 argument","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 23 Nov 2025 21:12:55 +0000","dateModified":"Sun, 23 Nov 2025 21:12:55 +0000","description":"This error reports that a method requires one and only one argument","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/method-%s::%s()-must-take-exactly-1-argument.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error reports that a method requires one and only one argument. It applies to methods such as ``__set_state()`` and ``__get``.

It may be surprising that it is a compile time error. Actually, the faulty method is a magic method, so PHP already knows what signature is expected for that method.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       function __set_state() {}
   }
   
   ?>


Literal Examples
****************
+ Method X::__set_state() must take exactly 1 argument

Solutions
_________

+ Use one argument for this method.

Related Error Messages
______________________

+ :ref:`method-%s::%s()-must-take-exactly-2-arguments`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
