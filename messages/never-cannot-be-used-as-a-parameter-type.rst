.. _never-cannot-be-used-as-a-parameter-type:

never cannot be used as a parameter type
----------------------------------------
 
.. meta::
	:description:
		never cannot be used as a parameter type: Never is a PHP return type, that is used to indicate that a method will not return a value.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: never cannot be used as a parameter type
	:og:description: Never is a PHP return type, that is used to indicate that a method will not return a value
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/never-cannot-be-used-as-a-parameter-type.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: never cannot be used as a parameter type
	:twitter:description: never cannot be used as a parameter type: Never is a PHP return type, that is used to indicate that a method will not return a value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/never-cannot-be-used-as-a-parameter-type.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/never-cannot-be-used-as-a-parameter-type.html","name":"never cannot be used as a parameter type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 28 Oct 2024 20:49:57 +0000","dateModified":"Thu, 17 Oct 2024 18:03:55 +0000","description":"Never is a PHP return type, that is used to indicate that a method will not return a value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/never-cannot-be-used-as-a-parameter-type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Never is a PHP return type, that is used to indicate that a method will not return a value. As such, it makes no sense to use with a parameter, as a parameter cannot return any value. Hence, the never type cannot be used with a parameter.

Example
_______

.. code-block:: php

   <?php
   
   function foo(never $n) {}
   
   ?>

Solutions
_________

+ Remove the never type.
+ Change the never type to another type.
