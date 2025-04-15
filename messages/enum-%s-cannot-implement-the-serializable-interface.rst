.. _enum-%s-cannot-implement-the-serializable-interface:

Enum %s cannot implement the Serializable interface
---------------------------------------------------
 
.. meta::
	:description:
		Enum %s cannot implement the Serializable interface: Enumeration cannot be serialized: they are created as needed by the PHP engine, during execution.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Enum %s cannot implement the Serializable interface
	:og:description: Enumeration cannot be serialized: they are created as needed by the PHP engine, during execution
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/enum-%25s-cannot-implement-the-serializable-interface.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Enum %s cannot implement the Serializable interface
	:twitter:description: Enum %s cannot implement the Serializable interface: Enumeration cannot be serialized: they are created as needed by the PHP engine, during execution
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/enum-%s-cannot-implement-the-serializable-interface.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/enum-%s-cannot-implement-the-serializable-interface.html","name":"Enum %s cannot implement the Serializable interface","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 15 Apr 2025 20:00:23 +0000","dateModified":"Tue, 15 Apr 2025 20:00:23 +0000","description":"Enumeration cannot be serialized: they are created as needed by the PHP engine, during execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/enum-%s-cannot-implement-the-serializable-interface.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Enumeration cannot be serialized: they are created as needed by the PHP engine, during execution. 

Example
_______

.. code-block:: php

   <?php
   
   enum E implements Serializable {
       case A;
   }
   
   ?>


Literal Examples
****************
+ Enum E cannot implement the Serializable interface

Solutions
_________

+ Remove the ``serializable`` implements.
+ Make this enumeration a class.
