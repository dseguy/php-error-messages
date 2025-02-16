.. _syntax-error,-unexpected-token-"private",-expecting-"{":

syntax error, unexpected token "private", expecting "{"
-------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "private", expecting "{": ``private`` and the other visibility options are only seen inside a class or CITE.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;private&quot;, expecting &quot;{&quot;
	:og:description: ``private`` and the other visibility options are only seen inside a class or CITE
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22private%22%2C-expecting-%22%7B%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "private", expecting "{"
	:twitter:description: syntax error, unexpected token "private", expecting "{": ``private`` and the other visibility options are only seen inside a class or CITE
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"private\",-expecting-\"{\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"private\",-expecting-\"{\".html","name":"syntax error, unexpected token \"private\", expecting \"{\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"``private`` and the other visibility options are only seen inside a class or CITE","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"private\",-expecting-\"{\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``private`` and the other visibility options are only seen inside a class or CITE. They mark the start of their definition (property, constant, method), and can only be seen in the body of the CITE. 

With an expected opening curly brace, this means the class signature was not finished with the opening curly brace.

Example
_______

.. code-block:: php

   <?php
   
   class X 
       private function foo() {}
   }
   
   ?>

Solutions
_________

+ Add the opening curly bracket between the class signature and its body.
+ Add the opening curly bracket between the interface signature and its body.
+ Add the opening curly bracket between the trait signature and its body.
+ Add the opening curly bracket between the enum signature and its body.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-token-"protected",-expecting-"{"`
+ :ref:`syntax-error,-unexpected-token-"public",-expecting-"{"`
