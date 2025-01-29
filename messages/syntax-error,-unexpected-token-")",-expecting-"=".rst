.. _syntax-error,-unexpected-token-")",-expecting-"=":

syntax-error,-unexpected-token-")",-expecting-"="
-------------------------------------------------
 
.. meta::
	:description:
		syntax-error,-unexpected-token-")",-expecting-"=": In this case, the ``=`` is missing, and the 1 has been merged into the ``strict_types`` to become an identifier.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax-error,-unexpected-token-&quot;)&quot;,-expecting-&quot;=&quot;
	:og:description: In this case, the ``=`` is missing, and the 1 has been merged into the ``strict_types`` to become an identifier
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%29%22%2C-expecting-%22%3D%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax-error,-unexpected-token-")",-expecting-"="
	:twitter:description: syntax-error,-unexpected-token-")",-expecting-"=": In this case, the ``=`` is missing, and the 1 has been merged into the ``strict_types`` to become an identifier
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\")\",-expecting-\"=\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\")\",-expecting-\"=\".html","name":"syntax-error,-unexpected-token-\")\",-expecting-\"=\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 29 Jan 2025 09:39:59 +0000","dateModified":"Wed, 29 Jan 2025 09:39:59 +0000","description":"In this case, the ``=`` is missing, and the 1 has been merged into the ``strict_types`` to become an identifier","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\")\",-expecting-\"=\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
In this case, the ``=`` is missing, and the 1 has been merged into the ``strict_types`` to become an identifier. PHP expects a ``=`` after this identifier.

Example
_______

.. code-block:: php

   <?php
   
   declare(strict_types1);
   
   ?>

Solutions
_________

+ Add ``=`` after ``strict_types``.
