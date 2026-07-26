.. _cannot-redeclare-constant-'%s':

Cannot redeclare constant '%s'
------------------------------
 
.. meta::
	:description:
		Cannot redeclare constant '%s': A constant declared at the top level with the ``const`` keyword can only be declared once per namespace, per request.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot redeclare constant &#039;%s&#039;
	:og:description: A constant declared at the top level with the ``const`` keyword can only be declared once per namespace, per request
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-redeclare-constant-%27%25s%27.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot redeclare constant '%s'
	:twitter:description: Cannot redeclare constant '%s': A constant declared at the top level with the ``const`` keyword can only be declared once per namespace, per request
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-redeclare-constant-'%s'.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-redeclare-constant-'%s'.html","name":"Cannot redeclare constant '%s'","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 26 Jul 2026 06:31:44 +0000","dateModified":"Sun, 26 Jul 2026 06:31:44 +0000","description":"A constant declared at the top level with the ``const`` keyword can only be declared once per namespace, per request","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-redeclare-constant-'%s'.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A constant declared at the top level with the ``const`` keyword can only be declared once per namespace, per request. This is a compile-time error, unlike the runtime warning produced when calling ``define()`` twice with the same constant name.

This error also happens when a file declaring a top-level constant is included more than once without a guard.

Example
_______

.. code-block:: php

   <?php
   
   const FOO = 1;
   const FOO = 2;
   
   ?>


Literal Examples
****************
+ Cannot redeclare constant 'FOO'

Solutions
_________

+ Remove the duplicate ``const`` declaration.
+ Use ``include_once`` or ``require_once`` for files that declare top-level constants.
+ If the constant needs to be conditionally declared, use ``define()`` together with ``defined()`` instead of ``const``.

Related Error Messages
______________________

+ :ref:`constant-%s-already-defined`
+ :ref:`cannot-declare-const-%s-because`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
