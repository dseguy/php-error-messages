.. _cannot-unset-\$this:

Cannot unset $this
------------------
 
.. meta::
	:description:
		Cannot unset $this: It is never possible to unset the pseudo-variable ``$this``, inside a class or outside.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot unset $this
	:og:description: It is never possible to unset the pseudo-variable ``$this``, inside a class or outside
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-unset-%24this.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot unset $this
	:twitter:description: Cannot unset $this: It is never possible to unset the pseudo-variable ``$this``, inside a class or outside
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-unset-$this.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-unset-$this.html","name":"Cannot unset $this","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"It is never possible to unset the pseudo-variable ``$this``, inside a class or outside","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-unset-$this.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
It is never possible to unset the pseudo-variable ``$this``, inside a class or outside. Actually, it is also never allowed to write to it. In short, it is possible to read ``$this``, and nothing more.

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

+ :ref:`cannot-re-assign-$this`
