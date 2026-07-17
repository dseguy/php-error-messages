.. _syntax-error,-unexpected-variable-"\$task",-expecting-")":

syntax error, unexpected variable "$task", expecting ")"
--------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected variable "$task", expecting ")": In a function, method or closure signature, each parameter must be separated from the next one by a comma.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected variable &quot;$task&quot;, expecting &quot;)&quot;
	:og:description: In a function, method or closure signature, each parameter must be separated from the next one by a comma
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-variable-%22%24task%22%2C-expecting-%22%29%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected variable "$task", expecting ")"
	:twitter:description: syntax error, unexpected variable "$task", expecting ")": In a function, method or closure signature, each parameter must be separated from the next one by a comma
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-variable-\"$task\",-expecting-\")\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-variable-\"$task\",-expecting-\")\".html","name":"syntax error, unexpected variable \"$task\", expecting \")\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 07:12:31 +0000","dateModified":"Wed, 15 Jul 2026 07:12:31 +0000","description":"In a function, method or closure signature, each parameter must be separated from the next one by a comma","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-variable-\"$task\",-expecting-\")\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
In a function, method or closure signature, each parameter must be separated from the next one by a comma. Here, the comma between ``$name`` and ``$task`` is missing, so once PHP has parsed ``$name`` as a complete, typed parameter, it expects either another comma or the closing parenthesis of the argument list; instead it finds another variable, ``$task``.

This is the generic "unexpected variable, expecting )" message, reported here with the concrete variable name found in the offending code, ``$task``.

Example
_______

.. code-block:: php

   <?php
   
   function schedule(string $name $task) {}
   
   ?>

Solutions
_________

+ Add the missing comma between the two parameters.
+ Remove the extra variable if it was left over from editing.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-variable-"$%s",-expecting-")"`
+ :ref:`syntax-error,-unexpected-token-")",-expecting-variable`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
