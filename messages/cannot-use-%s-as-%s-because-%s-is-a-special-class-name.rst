.. _cannot-use-%s-as-%s-because-%s-is-a-special-class-name:

Cannot use %s as %s because %s is a special class name
------------------------------------------------------
 
.. meta::
	:description:
		Cannot use %s as %s because %s is a special class name: Some words, such as ``float``, ``never``, ``_``, .
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use %s as %s because %s is a special class name
	:og:description: Some words, such as ``float``, ``never``, ``_``, 
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%25s-as-%25s-because-%25s-is-a-special-class-name.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use %s as %s because %s is a special class name
	:twitter:description: Cannot use %s as %s because %s is a special class name: Some words, such as ``float``, ``never``, ``_``, 
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-%s-as-%s-because-%s-is-a-special-class-name.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-%s-as-%s-because-%s-is-a-special-class-name.html","name":"Cannot use %s as %s because %s is a special class name","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 22 Aug 2025 20:59:52 +0000","dateModified":"Fri, 22 Aug 2025 20:59:52 +0000","description":"Some words, such as ``float``, ``never``, ``_``, ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-%s-as-%s-because-%s-is-a-special-class-name.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Some words, such as ``float``, ``never``, ``_``, ... are reserved by PHP and cannot be used as an alias name, just like they are not allowed with class names.

Example
_______

.. code-block:: php

   <?php
   
   use X as string;
   
   ?>


Literal Examples
****************
+ Cannot use X as string because string is a special class name

Solutions
_________

+ Use another name.
