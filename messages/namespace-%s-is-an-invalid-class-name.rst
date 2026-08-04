.. _namespace-%s-is-an-invalid-class-name:

namespace\%s is an invalid class name
-------------------------------------
 
.. meta::
	:description:
		namespace\%s is an invalid class name: This is the unquoted counterpart of the ``&#039;namespace\%s&#039; is an invalid class name`` error: it carries the exact same runtime message, just without the surrounding single quotes PHP actually prints around the offending name.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: namespace\%s is an invalid class name
	:og:description: This is the unquoted counterpart of the ``&#039;namespace\%s&#039; is an invalid class name`` error: it carries the exact same runtime message, just without the surrounding single quotes PHP actually prints around the offending name
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/namespace-%25s-is-an-invalid-class-name.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: namespace\%s is an invalid class name
	:twitter:description: namespace\%s is an invalid class name: This is the unquoted counterpart of the ``'namespace\%s' is an invalid class name`` error: it carries the exact same runtime message, just without the surrounding single quotes PHP actually prints around the offending name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/namespace-%s-is-an-invalid-class-name.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/namespace-%s-is-an-invalid-class-name.html","name":"namespace\\%s is an invalid class name","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 15:03:31 +0000","dateModified":"Tue, 04 Aug 2026 15:03:31 +0000","description":"This is the unquoted counterpart of the ``'namespace\\%s' is an invalid class name`` error: it carries the exact same runtime message, just without the surrounding single quotes PHP actually prints around the offending name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/namespace-%s-is-an-invalid-class-name.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This is the unquoted counterpart of the ``'namespace\%s' is an invalid class name`` error: it carries the exact same runtime message, just without the surrounding single quotes PHP actually prints around the offending name.

``namespace`` used at the start of a fully qualified name refers to the current namespace, and is usually omitted. ``self`` describes the current class: it is a relative class name with no absolute-path equivalent, so writing it as ``namespace\self`` (or the equivalent ``\self``) is meaningless and rejected. The same applies to ``static`` and ``parent``.

Example
_______

.. code-block:: php

   <?php
   
   function foo(namespace\self $a) {};
   
   function foo( $a): namespace\self {};
   
   class X {
       private namespace\self $f;
       private namespace\x $f2;
   }
   
   ?>


Literal Examples
****************
+ namespace\self is an invalid class name

Solutions
_________

+ Remove the initial namespace and backslash.
+ Use the literal name of the intended class.

Related Error Messages
______________________

+ :ref:`'namespace-%s'-is-an-invalid-class-name`
+ :ref:`is-an-invalid-class-name`
+ :ref:`'-%s'-is-an-invalid-class-name`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
