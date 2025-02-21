.. _syntax-error,-unexpected-token-"public",-expecting-"{":

syntax error, unexpected token "public", expecting "{"
------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "public", expecting "{": ``public`` and the other visibility options are only seen inside a class or CITE.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;public&quot;, expecting &quot;{&quot;
	:og:description: ``public`` and the other visibility options are only seen inside a class or CITE
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22public%22%2C-expecting-%22%7B%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "public", expecting "{"
	:twitter:description: syntax error, unexpected token "public", expecting "{": ``public`` and the other visibility options are only seen inside a class or CITE
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"public\",-expecting-\"{\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"public\",-expecting-\"{\".html","name":"syntax error, unexpected token \"public\", expecting \"{\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"``public`` and the other visibility options are only seen inside a class or CITE","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"public\",-expecting-\"{\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``public`` and the other visibility options are only seen inside a class or CITE. They mark the start of their definition (property, constant, method), and can only be seen in the body of the CITE. 

With an expected opening curly brace, this means the class signature was not finished with the opening curly brace.

Example
_______

.. code-block:: php

   <?php
   
   class X 
       public function foo() {}
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
+ :ref:`syntax-error,-unexpected-token-"private",-expecting-"{"`
