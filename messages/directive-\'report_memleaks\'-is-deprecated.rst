.. _directive-\'report_memleaks\'-is-deprecated:

Directive \'report_memleaks\' is deprecated
-------------------------------------------
 
.. meta::
	:description:
		Directive \'report_memleaks\' is deprecated: ``report_memleaks`` controls whether the Zend Memory Manager reports memory leaks detected during an unclean shutdown (for example when a fatal error occurs).
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Directive \&#039;report_memleaks\&#039; is deprecated
	:og:description: ``report_memleaks`` controls whether the Zend Memory Manager reports memory leaks detected during an unclean shutdown (for example when a fatal error occurs)
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/directive-%27report_memleaks%27-is-deprecated.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Directive \'report_memleaks\' is deprecated
	:twitter:description: Directive \'report_memleaks\' is deprecated: ``report_memleaks`` controls whether the Zend Memory Manager reports memory leaks detected during an unclean shutdown (for example when a fatal error occurs)
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/directive-\\'report_memleaks\\'-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/directive-\\'report_memleaks\\'-is-deprecated.html","name":"Directive \\'report_memleaks\\' is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:54:50 +0000","dateModified":"Tue, 11 Aug 2026 20:54:50 +0000","description":"``report_memleaks`` controls whether the Zend Memory Manager reports memory leaks detected during an unclean shutdown (for example when a fatal error occurs)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/directive-\\'report_memleaks\\'-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``report_memleaks`` controls whether the Zend Memory Manager reports memory leaks detected during an unclean shutdown (for example when a fatal error occurs). This diagnostic is only meaningful on debug builds of PHP, since a production, non-debug build does not track individual allocations well enough to produce a useful report.

Because the directive is only relevant to internal debugging builds and not to application code, it is deprecated as of PHP 8.5.0.

Example
_______

.. code-block:: php

   <?php
   
   ini_set('report_memleaks', '0');
   
   ?>

Solutions
_________

+ Remove references to ``report_memleaks`` from ``php.ini`` and from the code; the directive has no practical effect on non-debug builds.
+ Use a dedicated memory profiler (e.g. Valgrind, a debug build of PHP) when investigating memory leaks.
