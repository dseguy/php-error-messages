.. _cannot-use-'namespace'-as-namespace-name:

Cannot use 'namespace' as namespace name
----------------------------------------
 
.. meta::
	:description:
		Cannot use 'namespace' as namespace name: The namespace ``namespace`` keyword introduces a namespace.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use &#039;namespace&#039; as namespace name
	:og:description: The namespace ``namespace`` keyword introduces a namespace
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%27namespace%27-as-namespace-name.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use 'namespace' as namespace name
	:twitter:description: Cannot use 'namespace' as namespace name: The namespace ``namespace`` keyword introduces a namespace
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-'namespace'-as-namespace-name.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-'namespace'-as-namespace-name.html","name":"Cannot use 'namespace' as namespace name","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 10 Apr 2025 20:33:15 +0000","dateModified":"Thu, 10 Apr 2025 20:33:15 +0000","description":"The namespace ``namespace`` keyword introduces a namespace","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-'namespace'-as-namespace-name.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The namespace ``namespace`` keyword introduces a namespace. The namespace may have no name, or a name. The only forbidden name is ``namespace``, as it is used later to identify the current namespace, when used as the first entry in a fully qualified namespace.

Example
_______

.. code-block:: php

   <?php
   
   namespace Namespace {}
   
   ?>

Solutions
_________

+ Use another name than ``namespace``.
