.. _syntax-error,-unexpected-'elseif':

syntax error, unexpected 'elseif'
---------------------------------
 
.. meta::
	:description:
		syntax error, unexpected 'elseif': The ``elseif`` must follow a ``if`` structure.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected &#039;elseif&#039;
	:og:description: The ``elseif`` must follow a ``if`` structure
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-%27elseif%27.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected 'elseif'
	:twitter:description: syntax error, unexpected 'elseif': The ``elseif`` must follow a ``if`` structure
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-'elseif'.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-'elseif'.html","name":"syntax error, unexpected 'elseif'","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Mar 2025 09:36:23 +0000","dateModified":"Sun, 16 Mar 2025 09:36:23 +0000","description":"The ``elseif`` must follow a ``if`` structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-'elseif'.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``elseif`` must follow a ``if`` structure. It cannot be used alone, not be used after a ``else`` clause.

Example
_______

.. code-block:: php

   <?php
   
   // elseif cannot be standalone 
   elseif ($a === 1) {
       echo 2;
   }
   
   // else has closed the if structure, not more elseif allowed
   if ($condition) {}
   else {} 
   elseif ($a === 1) {
       echo 2;
   }
   
   // the endif; has already closed the if structure.
   if ($condition):
   
   endif;
   elseif ($a === 1) :
       echo 2;
   endif;
   
   ?>

Solutions
_________

+ Ensure that there is a previous ``if`` structure, with one ``then`` block, and optionally, other ``elseif`` block.
+ Ensure that there is no previous ``else`` clause.
+ Ensure that there is no previous ``endif`` keyword.
