.. _cannot-use-%s-as-%s-because-'%s'-is-a-special-class-name:

Cannot use %s as %s because '%s' is a special class name
--------------------------------------------------------
 
.. meta::
	:description:
		Cannot use %s as %s because '%s' is a special class name: This error reports that an alias was created with a special word, such as ``float``, ``string``, etc.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use %s as %s because &#039;%s&#039; is a special class name
	:og:description: This error reports that an alias was created with a special word, such as ``float``, ``string``, etc
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%25s-as-%25s-because-%27%25s%27-is-a-special-class-name.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use %s as %s because '%s' is a special class name
	:twitter:description: Cannot use %s as %s because '%s' is a special class name: This error reports that an alias was created with a special word, such as ``float``, ``string``, etc
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-%s-as-%s-because-'%s'-is-a-special-class-name.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-%s-as-%s-because-'%s'-is-a-special-class-name.html","name":"Cannot use %s as %s because '%s' is a special class name","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 22 Aug 2025 17:04:53 +0000","dateModified":"Fri, 22 Aug 2025 17:04:53 +0000","description":"This error reports that an alias was created with a special word, such as ``float``, ``string``, etc","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-%s-as-%s-because-'%s'-is-a-special-class-name.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error reports that an alias was created with a special word, such as ``float``, ``string``, etc. Classes with such names are not possible, and the ``use`` command cannot use them neither.

Example
_______

.. code-block:: php

   <?php
   
   use X as string;
   
   ?>


Literal Examples
****************
+ Cannot use X as string because 'string' is a special class name
+ Cannot use X as string because 'float' is a special class name

Solutions
_________

+ Use another name for the import alias.

Related Error Messages
______________________

+ :ref:`cannot-use%s-%s-as-%s-because-the-name-is-already-in-use`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `replaceAlias <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/replaceAlias.html>`_.
