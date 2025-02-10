.. _syntax-error,-unexpected-fully-qualified-name-"%d",-expecting-"{":

syntax error, unexpected fully qualified name "%s", expecting "{"
-----------------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected fully qualified name "%s", expecting "{": The ``namespace`` keyword expected an actual name, or none at all, for declarations in the global namespace.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected fully qualified name &quot;%s&quot;, expecting &quot;{&quot;
	:og:description: The ``namespace`` keyword expected an actual name, or none at all, for declarations in the global namespace
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-fully-qualified-name-%22%25d%22%2C-expecting-%22%7B%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected fully qualified name "%s", expecting "{"
	:twitter:description: syntax error, unexpected fully qualified name "%s", expecting "{": The ``namespace`` keyword expected an actual name, or none at all, for declarations in the global namespace
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-fully-qualified-name-\"%d\",-expecting-\"{\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-fully-qualified-name-\"%d\",-expecting-\"{\".html","name":"syntax error, unexpected fully qualified name \"%s\", expecting \"{\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 09 Feb 2025 20:11:19 +0000","dateModified":"Sun, 09 Feb 2025 20:11:19 +0000","description":"The ``namespace`` keyword expected an actual name, or none at all, for declarations in the global namespace","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-fully-qualified-name-\"%d\",-expecting-\"{\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``namespace`` keyword expected an actual name, or none at all, for declarations in the global namespace. 

In particular, the name should not start with the ``\`` token, but with letter or an underscore.

Example
_______

.. code-block:: php

   <?php
   
   namespace \A\B;
   
   ?>

Solutions
_________

+ Remove the initial ``\``.
+ Add a namespace before the initial ``\``.
+ Remove the ``\`` and use curly braces for a declaration in the global space.
