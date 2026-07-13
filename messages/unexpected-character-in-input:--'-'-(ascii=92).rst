.. _unexpected-character-in-input:--'-'-(ascii=92):

Unexpected character in input:  \'\\' (ASCII=92)
------------------------------------------------
 
.. meta::
	:description:
		Unexpected character in input:  \'\\' (ASCII=92): This linting error appears at linting time, until PHP introduced namespaces, whose separator is ``\``.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Unexpected character in input:  \&#039;\\&#039; (ASCII=92)
	:og:description: This linting error appears at linting time, until PHP introduced namespaces, whose separator is ``\``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/unexpected-character-in-input%3A--%27-%27-%28ascii%3D92%29.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unexpected character in input:  \'\\' (ASCII=92)
	:twitter:description: Unexpected character in input:  \'\\' (ASCII=92): This linting error appears at linting time, until PHP introduced namespaces, whose separator is ``\``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unexpected-character-in-input:--'-'-(ascii=92).html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unexpected-character-in-input:--'-'-(ascii=92).html","name":"Unexpected character in input:  \\'\\\\' (ASCII=92)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 08:14:23 +0000","dateModified":"Mon, 13 Jul 2026 08:14:23 +0000","description":"This linting error appears at linting time, until PHP introduced namespaces, whose separator is ``\\``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unexpected-character-in-input:--'-'-(ascii=92).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This linting error appears at linting time, until PHP introduced namespaces, whose separator is ``\``. Then, it was added to the recognized characters.

Example
_______

.. code-block:: php

   <?php
   
       use \A\B as C;
   
   ?>

Solutions
_________

+ Upgrade to PHP 5.3 or later.
+ Replace the backslash by an underscore.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
