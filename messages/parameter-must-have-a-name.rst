.. _parameter-must-have-a-name:

Parameter must have a name
--------------------------
 
.. meta::
	:description:
		Parameter must have a name: This is an internal error, when the engine detect that a parameter was set on a function without a name.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Parameter must have a name
	:og:description: This is an internal error, when the engine detect that a parameter was set on a function without a name
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/parameter-must-have-a-name.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Parameter must have a name
	:twitter:description: Parameter must have a name: This is an internal error, when the engine detect that a parameter was set on a function without a name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/parameter-must-have-a-name.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/parameter-must-have-a-name.html","name":"Parameter must have a name","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 05 Jun 2026 11:18:25 +0000","dateModified":"Fri, 05 Jun 2026 11:18:25 +0000","description":"This is an internal error, when the engine detect that a parameter was set on a function without a name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/parameter-must-have-a-name.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This is an internal error, when the engine detect that a parameter was set on a function without a name. This should not compile anyway.

Example
_______

.. code-block:: php

   

Solutions
_________

+ Change of PHP version.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
