.. _get-hook-of-property-%s::\$%s-must-not-have-a-parameter-list:

get hook of property %s::$%s must not have a parameter list
-----------------------------------------------------------
 
.. meta::
	:description:
		get hook of property %s::$%s must not have a parameter list: The ``get`` hook property cannot be specified with a parameter list: not with a parameter, nor even with the empty parenthesis.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: get hook of property %s::$%s must not have a parameter list
	:og:description: The ``get`` hook property cannot be specified with a parameter list: not with a parameter, nor even with the empty parenthesis
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/get-hook-of-property-%25s%3A%3A%24%25s-must-not-have-a-parameter-list.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: get hook of property %s::$%s must not have a parameter list
	:twitter:description: get hook of property %s::$%s must not have a parameter list: The ``get`` hook property cannot be specified with a parameter list: not with a parameter, nor even with the empty parenthesis
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/get-hook-of-property-%s::$%s-must-not-have-a-parameter-list.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/get-hook-of-property-%s::$%s-must-not-have-a-parameter-list.html","name":"get hook of property %s::$%s must not have a parameter list","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Apr 2026 15:51:18 +0000","dateModified":"Tue, 07 Apr 2026 15:51:18 +0000","description":"The ``get`` hook property cannot be specified with a parameter list: not with a parameter, nor even with the empty parenthesis","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/get-hook-of-property-%s::$%s-must-not-have-a-parameter-list.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``get`` hook property cannot be specified with a parameter list: not with a parameter, nor even with the empty parenthesis.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       private int $p {
           get($a) => 1;
       }
   
       private int $q {
           get() => 1;
       }
   }
   
   
   ?>


Literal Examples
****************
+ get hook of property X::$p must not have a parameter list

Solutions
_________

+ Remove the parenthesis that follows the ``get`` keyword, and their content.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
