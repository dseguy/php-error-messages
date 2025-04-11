.. _non-abstract-method-%s::%s()-must-contain-body:

Non-abstract method %s::%s() must contain body
----------------------------------------------
 
.. meta::
	:description:
		Non-abstract method %s::%s() must contain body: A method must have a body block.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Non-abstract method %s::%s() must contain body
	:og:description: A method must have a body block
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/non-abstract-method-%25s%3A%3A%25s%28%29-must-contain-body.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Non-abstract method %s::%s() must contain body
	:twitter:description: Non-abstract method %s::%s() must contain body: A method must have a body block
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/non-abstract-method-%s::%s()-must-contain-body.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/non-abstract-method-%s::%s()-must-contain-body.html","name":"Non-abstract method %s::%s() must contain body","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"A method must have a body block","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/non-abstract-method-%s::%s()-must-contain-body.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A method must have a body block. When it has no body block, it has a semicolon instead, and it must have the ``abstract`` keyword for the method, and following, to the class.

Example
_______

.. code-block:: php

   <?php
   
   class X {
        function foo() ;
   }
   
   ?>


Literal Examples
****************
+ Non-abstract method X::foo() must contain body

Solutions
_________

+ Add a body block to the method.
+ Add a abstract option to the method and to the class.

Related Error Messages
______________________

+ :ref:`class-%s-contains-%d-abstract-method%s-and-must-therefore-be-declared-abstract-or-implement-the-remaining-methods`
