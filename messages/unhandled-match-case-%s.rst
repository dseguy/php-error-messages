.. _unhandled-match-case-%s:

Unhandled match case %s
-----------------------
 
.. meta::
	:description:
		Unhandled match case %s: The error is emitted when the ``matching`` value is not found in the list of entry of the expression (here true is not in the list of 1 and 2), and also when the expression doesn&#039;t have a default entry.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Unhandled match case %s
	:og:description: The error is emitted when the ``matching`` value is not found in the list of entry of the expression (here true is not in the list of 1 and 2), and also when the expression doesn&#039;t have a default entry
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/unhandled-match-case-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unhandled match case %s
	:twitter:description: Unhandled match case %s: The error is emitted when the ``matching`` value is not found in the list of entry of the expression (here true is not in the list of 1 and 2), and also when the expression doesn't have a default entry
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unhandled-match-case-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unhandled-match-case-%s.html","name":"Unhandled match case %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"The error is emitted when the ``matching`` value is not found in the list of entry of the expression (here true is not in the list of 1 and 2), and also when the expression doesn't have a default entry","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unhandled-match-case-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The error is emitted when the ``matching`` value is not found in the list of entry of the expression (here true is not in the list of 1 and 2), and also when the expression doesn't have a default entry. That default entry would act as a catch-all entry, and would process unknown values.

Example
_______

.. code-block:: php

   <?php
   
   match(3) {
       1, 2 => 'foo',
   };
   
   ?>


Literal Examples
****************
+ Unhandled match case 3

Solutions
_________

+ Add the missing entry in the list.
+ Add the missing default in the match.
+ Weed out the value before submitting it to the match().
