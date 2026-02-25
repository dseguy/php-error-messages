.. _cannot-use-'%s'-as-namespace-name:

Cannot use \'%s\' as namespace name
-----------------------------------
 
.. meta::
	:description:
		Cannot use \'%s\' as namespace name: The ``namespace`` keyword is used to declare a namespace, and also to reference the current namespace, when building a name, for a function, a class, etc.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use \&#039;%s\&#039; as namespace name
	:og:description: The ``namespace`` keyword is used to declare a namespace, and also to reference the current namespace, when building a name, for a function, a class, etc
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%27%25s%27-as-namespace-name.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use \'%s\' as namespace name
	:twitter:description: Cannot use \'%s\' as namespace name: The ``namespace`` keyword is used to declare a namespace, and also to reference the current namespace, when building a name, for a function, a class, etc
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-'%s'-as-namespace-name.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-'%s'-as-namespace-name.html","name":"Cannot use \\'%s\\' as namespace name","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 25 Feb 2026 15:58:39 +0000","dateModified":"Wed, 25 Feb 2026 15:58:39 +0000","description":"The ``namespace`` keyword is used to declare a namespace, and also to reference the current namespace, when building a name, for a function, a class, etc","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-'%s'-as-namespace-name.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``namespace`` keyword is used to declare a namespace, and also to reference the current namespace, when building a name, for a function, a class, etc. As such, it is not possible to use ``namespace`` as a prefix of the name of a namespace (sic), as it may be confused later with the current namespace. Also, namespaces are case insensitive.

Example
_______

.. code-block:: php

   <?php
   
   namespace Namespace\xyz {}
   
   namespace NAMEspace\xyz {}
   
   // This is OK, as ``namespace`` is not first in the name
   namespace Abc\Namespace\Xyz {}
   
   ?>


Literal Examples
****************
+ Cannot use "namespace\xyz" as namespace name, due to conflict with ns-relative names

Solutions
_________

+ Remove the word namespace in the name of the namespace.
+ Add another prefix before the word namespace in the name of the namespace.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
