.. _cannot-re-assign-\$this:

Cannot re-assign $this
----------------------
 
.. meta::
	:description:
		Cannot re-assign $this: It is never possible to assign a new value to the pseudo-variable ``$this``, inside a class or outside.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot re-assign $this
	:og:description: It is never possible to assign a new value to the pseudo-variable ``$this``, inside a class or outside
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-re-assign-%24this.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot re-assign $this
	:twitter:description: Cannot re-assign $this: It is never possible to assign a new value to the pseudo-variable ``$this``, inside a class or outside
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-re-assign-$this.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-re-assign-$this.html","name":"Cannot re-assign $this","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"It is never possible to assign a new value to the pseudo-variable ``$this``, inside a class or outside","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-re-assign-$this.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
It is never possible to assign a new value to the pseudo-variable ``$this``, inside a class or outside. In fact, it is also never allowed to unset it either. In short, it is possible to read ``$this``, and nothing more.

Example
_______

.. code-block:: php

   <?php
   
   unset($this);
   
   ?>

Solutions
_________

+ Remove this call to unset.

Related Error Messages
______________________

+ :ref:`cannot-unset-$this`
+ :ref:`cannot-re-assign-auto-global-variable-%s`
