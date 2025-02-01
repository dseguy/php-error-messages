.. _get_called_class()-must-be-called-from-within-a-class:

get_called_class() must be called from within a class
-----------------------------------------------------
 
.. meta::
	:description:
		get_called_class() must be called from within a class: get_called_class() returns the name of the current class.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: get_called_class() must be called from within a class
	:og:description: get_called_class() returns the name of the current class
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/get_called_class%28%29-must-be-called-from-within-a-class.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: get_called_class() must be called from within a class
	:twitter:description: get_called_class() must be called from within a class: get_called_class() returns the name of the current class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/get_called_class()-must-be-called-from-within-a-class.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/get_called_class()-must-be-called-from-within-a-class.html","name":"get_called_class() must be called from within a class","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 01 Feb 2025 09:57:00 +0000","dateModified":"Sat, 01 Feb 2025 09:57:00 +0000","description":"get_called_class() returns the name of the current class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/get_called_class()-must-be-called-from-within-a-class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
get_called_class() returns the name of the current class. It emits an error when it cannot find the current class. 

get_called_class() can only be called from within a class, trait or enumeration. It may be called from a static closure, as long as the closure is created inside a class.


Example
_______

.. code-block:: php

   <?php
   
   get_called_class();
   
   ?>

Solutions
_________

+ Use the magic method __CLASS__.
+ Use the function inside a class, enumeration or trait.
