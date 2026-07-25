.. _intllistformatter-object-is-already-constructed:

IntlListFormatter object is already constructed
-----------------------------------------------
 
.. meta::
	:description:
		IntlListFormatter object is already constructed: ``IntlListFormatter``, added in PHP 8.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: IntlListFormatter object is already constructed
	:og:description: ``IntlListFormatter``, added in PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/intllistformatter-object-is-already-constructed.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: IntlListFormatter object is already constructed
	:twitter:description: IntlListFormatter object is already constructed: ``IntlListFormatter``, added in PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/intllistformatter-object-is-already-constructed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/intllistformatter-object-is-already-constructed.html","name":"IntlListFormatter object is already constructed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 25 Jul 2026 12:23:30 +0000","dateModified":"Sat, 25 Jul 2026 12:23:30 +0000","description":"``IntlListFormatter``, added in PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/intllistformatter-object-is-already-constructed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``IntlListFormatter``, added in PHP 8.5, wraps ICU's list formatter to render lists such as ``"a, b, and c"`` according to locale rules. Like other ``intl`` classes, its constructor guards against being run twice on the same object: the first successful call allocates the underlying ICU formatter, and a second call would leak that resource and leave the object in an inconsistent state.

Calling ``__construct()`` explicitly a second time -- directly, or indirectly through code that re-runs construction on an already built instance -- throws this error.

Example
_______

.. code-block:: php

   <?php
   
   $formatter = new IntlListFormatter('en_US');
   
   // Calling the constructor a second time on the same instance
   $formatter->__construct('fr_FR');
   
   ?>

Solutions
_________

+ Create a new ``IntlListFormatter`` instance instead of reusing and reconstructing the same object.
+ Never call ``__construct()`` manually after the object has already been created with ``new``.

Related Error Messages
______________________

+ :ref:`datetimezone-object-is-unconstructed`

See Also
________

+ `IntlListFormatter <https://www.php.net/manual/en/class.intllistformatter.php>`_

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
