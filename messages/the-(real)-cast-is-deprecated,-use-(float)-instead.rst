.. _the-(real)-cast-is-deprecated,-use-(float)-instead:

The (real) cast is deprecated, use (float) instead
--------------------------------------------------
 
.. meta::
	:description:
		The (real) cast is deprecated, use (float) instead: The ``(real)`` cast operator is deprecated in PHP 7.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: The (real) cast is deprecated, use (float) instead
	:og:description: The ``(real)`` cast operator is deprecated in PHP 7
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/the-%28real%29-cast-is-deprecated%2C-use-%28float%29-instead.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: The (real) cast is deprecated, use (float) instead
	:twitter:description: The (real) cast is deprecated, use (float) instead: The ``(real)`` cast operator is deprecated in PHP 7
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/the-(real)-cast-is-deprecated,-use-(float)-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/the-(real)-cast-is-deprecated,-use-(float)-instead.html","name":"The (real) cast is deprecated, use (float) instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"The ``(real)`` cast operator is deprecated in PHP 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/the-(real)-cast-is-deprecated,-use-(float)-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``(real)`` cast operator is deprecated in PHP 7.4. It will be completely removed in PHP 8.0.

Example
_______

.. code-block:: php

   <?php
   
   $float = (real) 1.333;
   
   ?>

Solutions
_________

+ Use ``(float)`` instead.


In more recent PHP versions, this error message is now :ref:`the-(real)-cast-has-been-removed,-use-(float)-instead`.
