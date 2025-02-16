.. _switch-statements-may-only-contain-one-default-clause:

Switch statements may only contain one default clause
-----------------------------------------------------
 
.. meta::
	:description:
		Switch statements may only contain one default clause: The switch expression uses cases and a default entry.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Switch statements may only contain one default clause
	:og:description: The switch expression uses cases and a default entry
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/switch-statements-may-only-contain-one-default-clause.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Switch statements may only contain one default clause
	:twitter:description: Switch statements may only contain one default clause: The switch expression uses cases and a default entry
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/switch-statements-may-only-contain-one-default-clause.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/switch-statements-may-only-contain-one-default-clause.html","name":"Switch statements may only contain one default clause","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"The switch expression uses cases and a default entry","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/switch-statements-may-only-contain-one-default-clause.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The switch expression uses cases and a default entry. Cases are matched against the parameter variable, and when all of them fail, the default case (sic) is used. This also means that there can be only one defaut entry, as it will be used after all the cases. 

When several default cases are spotted, PHP stops compilation.

Note that there is no error message for multiple identical cases: in such situations, the first one is used.

Example
_______

.. code-block:: php

   <?php
   
   switch($a) {
       default:
       default: 
   }
   
   ?>

Solutions
_________

+ Remove all defaults but one.

Related Error Messages
______________________

+ :ref:`match-expressions-may-only-contain-one-default-arm`
