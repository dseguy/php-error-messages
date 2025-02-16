.. _cannot-use-try-without-catch-or-finally:

Cannot use try without catch or finally
---------------------------------------
 
.. meta::
	:description:
		Cannot use try without catch or finally: Try command have catch and finally clauses.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use try without catch or finally
	:og:description: Try command have catch and finally clauses
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-try-without-catch-or-finally.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use try without catch or finally
	:twitter:description: Cannot use try without catch or finally: Try command have catch and finally clauses
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-try-without-catch-or-finally.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-try-without-catch-or-finally.html","name":"Cannot use try without catch or finally","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"Try command have catch and finally clauses","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-try-without-catch-or-finally.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Try command have catch and finally clauses. While both are optional, they can't be omitted both at the same time.

Example
_______

.. code-block:: php

   <?php
   
   try {}
   
   ?>

Solutions
_________

+ Add a catch clause.
+ Add a finally clause.
