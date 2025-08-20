.. _type-mixed-can-only-be-used-as-a-standalone-type:

Type mixed can only be used as a standalone type
------------------------------------------------
 
.. meta::
	:description:
		Type mixed can only be used as a standalone type: ``mixed`` is a special type, that represents all the available types.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Type mixed can only be used as a standalone type
	:og:description: ``mixed`` is a special type, that represents all the available types
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/type-mixed-can-only-be-used-as-a-standalone-type.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Type mixed can only be used as a standalone type
	:twitter:description: Type mixed can only be used as a standalone type: ``mixed`` is a special type, that represents all the available types
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/type-mixed-can-only-be-used-as-a-standalone-type.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/type-mixed-can-only-be-used-as-a-standalone-type.html","name":"Type mixed can only be used as a standalone type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 20 Aug 2025 10:11:13 +0000","dateModified":"Wed, 20 Aug 2025 10:11:13 +0000","description":"``mixed`` is a special type, that represents all the available types","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/type-mixed-can-only-be-used-as-a-standalone-type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``mixed`` is a special type, that represents all the available types. There is no need to combine this type in an union, as all the types are already compiled in ``mixed``; Not it can be comabined in an intersectional type.

Example
_______

.. code-block:: php

   <?php
   
   function foo(A|mixed $i = null) {}
   
   ?>

Solutions
_________

+ Remove the mixed type and use other types.
+ Remove the mixed type entirely.

Related Error Messages
______________________

+ :ref:`type-mixed-cannot-be-marked-as-nullable-since-mixed-already-includes-null`
