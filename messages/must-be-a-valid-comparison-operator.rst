.. _must-be-a-valid-comparison-operator:

must be a valid comparison operator
-----------------------------------
 
.. meta::
	:description:
		must be a valid comparison operator: version_compare() compares version strings, using an operator, passed as third parameter.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: must be a valid comparison operator
	:og:description: version_compare() compares version strings, using an operator, passed as third parameter
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/must-be-a-valid-comparison-operator.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: must be a valid comparison operator
	:twitter:description: must be a valid comparison operator: version_compare() compares version strings, using an operator, passed as third parameter
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/must-be-a-valid-comparison-operator.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/must-be-a-valid-comparison-operator.html","name":"must be a valid comparison operator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"version_compare() compares version strings, using an operator, passed as third parameter","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/must-be-a-valid-comparison-operator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
version_compare() compares version strings, using an operator, passed as third parameter. Until PHP 8.1, unknown operators are ignored, and use the default value. 

Nowadays, it is generating a fatal error.

Valid operators are : ``<``, ``lt``, ``<=``, ``le``, ``>``, ``gt``, ``>=``, ``ge``, ``==``, ``=``, ``eq``, ``!=``, ``<>``, ``ne``

Note that the 3rd parameter is case sensitive, so ``NE`` also yields the error.

Example
_______

.. code-block:: php

   <?php
   
   version_compare('1.2.4', '1.2.3', '?');
   
   ?>

Solutions
_________

+ Use a valid operator.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `version_compare <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/version_compare.html>`_.
