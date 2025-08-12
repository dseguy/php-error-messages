.. _syntax-error,-unexpected-')',-expecting-'=':

syntax error, unexpected \')\', expecting \'=\'
-----------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected \')\', expecting \'=\': ``list()`` must appear on the left side of an assignation.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected \&#039;)\&#039;, expecting \&#039;=\&#039;
	:og:description: ``list()`` must appear on the left side of an assignation
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-%27%29%27%2C-expecting-%27%3D%27.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected \')\', expecting \'=\'
	:twitter:description: syntax error, unexpected \')\', expecting \'=\': ``list()`` must appear on the left side of an assignation
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-')',-expecting-'='.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-')',-expecting-'='.html","name":"syntax error, unexpected \\')\\', expecting \\'=\\'","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 05 Aug 2025 05:02:15 +0000","dateModified":"Tue, 05 Aug 2025 05:02:15 +0000","description":"``list()`` must appear on the left side of an assignation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-')',-expecting-'='.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``list()`` must appear on the left side of an assignation. It will be filled with the values in the array of the right side.

Example
_______

.. code-block:: php

   <?php
   
   var_dump(list(1,2,3));
   
   ?>

Solutions
_________

+ Add a ``=`` sign to the right of the ``list()`` call, and then, add an array on the right.
+ Turn the ``list()`` into a ``[]`` short syntax. This might change the meaning, as, in this case, ``list()`` becomes an array.
