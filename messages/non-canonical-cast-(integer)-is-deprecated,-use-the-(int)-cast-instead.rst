.. _non-canonical-cast-(integer)-is-deprecated,-use-the-(int)-cast-instead:

Non-canonical cast (integer) is deprecated, use the (int) cast instead
----------------------------------------------------------------------
 
.. meta::
	:description:
		Non-canonical cast (integer) is deprecated, use the (int) cast instead: The non-canonical cast ``(integer)`` has been deprecated.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Non-canonical cast (integer) is deprecated, use the (int) cast instead
	:og:description: The non-canonical cast ``(integer)`` has been deprecated
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/non-canonical-cast-%28integer%29-is-deprecated%2C-use-the-%28int%29-cast-instead.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Non-canonical cast (integer) is deprecated, use the (int) cast instead
	:twitter:description: Non-canonical cast (integer) is deprecated, use the (int) cast instead: The non-canonical cast ``(integer)`` has been deprecated
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/non-canonical-cast-(integer)-is-deprecated,-use-the-(int)-cast-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/non-canonical-cast-(integer)-is-deprecated,-use-the-(int)-cast-instead.html","name":"Non-canonical cast (integer) is deprecated, use the (int) cast instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 24 Sep 2025 17:17:26 +0000","dateModified":"Wed, 24 Sep 2025 17:17:26 +0000","description":"The non-canonical cast ``(integer)`` has been deprecated","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/non-canonical-cast-(integer)-is-deprecated,-use-the-(int)-cast-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The non-canonical cast ``(integer)`` has been deprecated. It should be replace by the simpler ``(int)``.

Example
_______

.. code-block:: php

   <?php
   
   $a = (integer) $string;
   
   ?>

Solutions
_________

+ Use ``(int)``.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `nonCanonicalCast <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/nonCanonicalCast.html>`_.

Static Analysis
_______________

This error may be tracked down with the following static analysis rules: `Php/NonCanonicalCast <https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/NonCanonicalCast.html>`_.
