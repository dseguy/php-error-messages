.. _cannot-use%s-%s-as-%s-because-the-name-is-already-in-use:

Cannot use%s %s as %s because the name is already in use
--------------------------------------------------------
 
.. meta::
	:description:
		Cannot use%s %s as %s because the name is already in use: This error appears when a name, for class, interface, trait or enumeration was already used by a ``use`` command.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use%s %s as %s because the name is already in use
	:og:description: This error appears when a name, for class, interface, trait or enumeration was already used by a ``use`` command
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use%25s-%25s-as-%25s-because-the-name-is-already-in-use.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use%s %s as %s because the name is already in use
	:twitter:description: Cannot use%s %s as %s because the name is already in use: This error appears when a name, for class, interface, trait or enumeration was already used by a ``use`` command
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use%s-%s-as-%s-because-the-name-is-already-in-use.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use%s-%s-as-%s-because-the-name-is-already-in-use.html","name":"Cannot use%s %s as %s because the name is already in use","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 22 Aug 2025 17:03:53 +0000","dateModified":"Fri, 22 Aug 2025 17:03:53 +0000","description":"This error appears when a name, for class, interface, trait or enumeration was already used by a ``use`` command","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use%s-%s-as-%s-because-the-name-is-already-in-use.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error appears when a name, for class, interface, trait or enumeration was already used by a ``use`` command. This is usually a problem within the block that has the ``use``.

Example
_______

.. code-block:: php

   <?php
   
   use X as Y;
   
   class Y {}
   
   ?>


Literal Examples
****************
+ Cannot use X as Y because the name is already in use

Solutions
_________

+ Use another name for the alias.
+ Use another name for the definition.

Related Error Messages
______________________

+ :ref:`cannot-use-%s-as-%s-because-'%s'-is-a-special-class-name`
