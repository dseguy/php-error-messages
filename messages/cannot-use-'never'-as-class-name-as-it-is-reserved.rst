.. _cannot-use-'never'-as-class-name-as-it-is-reserved:

Cannot use 'never' as class name as it is reserved
--------------------------------------------------
 
.. meta::
	:description:
		Cannot use 'never' as class name as it is reserved: never is a PHP reserved keyword, since PHP 8.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use &#039;never&#039; as class name as it is reserved
	:og:description: never is a PHP reserved keyword, since PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%27never%27-as-class-name-as-it-is-reserved.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use 'never' as class name as it is reserved
	:twitter:description: Cannot use 'never' as class name as it is reserved: never is a PHP reserved keyword, since PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-'never'-as-class-name-as-it-is-reserved.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-'never'-as-class-name-as-it-is-reserved.html","name":"Cannot use 'never' as class name as it is reserved","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"never is a PHP reserved keyword, since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-'never'-as-class-name-as-it-is-reserved.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
never is a PHP reserved keyword, since PHP 8.1. Until then, it was possible to use it anywhere as names, but since PHP 8.1, it is forbidden with class names, interfaces, enumerations and traits.

The same error is used for all CITE structures : class, interfaces, traits and enumerations.

Namespaces do not solve this issue.

never as a function, method, property, global or class constants is legit.

Example
_______

.. code-block:: php

   <?php
   
   class Never {}
   interface Never {}
   trait Never {}
   enum Never {}
   
   ?>

Solutions
_________

+ Use another name for that class.
