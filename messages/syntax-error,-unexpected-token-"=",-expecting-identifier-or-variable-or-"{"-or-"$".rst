.. _syntax-error,-unexpected-token-"=",-expecting-identifier-or-variable-or-"{"-or-"\$":

syntax error, unexpected token "=", expecting identifier or variable or "{" or "$"
----------------------------------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "=", expecting identifier or variable or "{" or "$": The object operators ``-&gt;`` and ``.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;=&quot;, expecting identifier or variable or &quot;{&quot; or &quot;$&quot;
	:og:description: The object operators ``-&gt;`` and ``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%3D%22%2C-expecting-identifier-or-variable-or-%22%7B%22-or-%22%24%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "=", expecting identifier or variable or "{" or "$"
	:twitter:description: syntax error, unexpected token "=", expecting identifier or variable or "{" or "$": The object operators ``->`` and ``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"=\",-expecting-identifier-or-variable-or-\"{\"-or-\"$\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"=\",-expecting-identifier-or-variable-or-\"{\"-or-\"$\".html","name":"syntax error, unexpected token \"=\", expecting identifier or variable or \"{\" or \"$\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"The object operators ``->`` and ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"=\",-expecting-identifier-or-variable-or-\"{\"-or-\"$\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The object operators ``->`` and ``?->`` both expect a name as second operand, aka on the right. Here, the name was forgotten and the operator tried to use ``=`` as a name, which is not allowed.

Example
_______

.. code-block:: php

   <?php
   
   // missing a property
   $object-> = 3;
   
   // missing a property
   $object?-> = 3;
   
   ?>

Solutions
_________

+ Add a name after the ``->`` and ``?->``, such as ``$object->property``.
+ Add a name inside a variable after the ``->`` and ``?->``, such as ``$object->$name``.
+ Add a name inside an expression after the ``->`` and ``?->``, such as ``$object->{$variable . 'suffix'}``.
+ Add a name inside an variable variable after the ``->`` and ``?->``, such as ``$object->$$variable``.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-token-"(",-expecting-identifier-or-variable-or-"{"-or-"$"`
