.. _unmatched-'}':

Unmatched '}'
-------------
 
.. meta::
	:description:
		Unmatched '}': PHP has encountered a closing curly brackets, but has no related opening curly bracket.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Unmatched &#039;}&#039;
	:og:description: PHP has encountered a closing curly brackets, but has no related opening curly bracket
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/unmatched-%27%7D%27.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unmatched '}'
	:twitter:description: Unmatched '}': PHP has encountered a closing curly brackets, but has no related opening curly bracket
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unmatched-'}'.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unmatched-'}'.html","name":"Unmatched '}'","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Feb 2025 17:34:39 +0000","dateModified":"Tue, 04 Feb 2025 17:34:39 +0000","description":"PHP has encountered a closing curly brackets, but has no related opening curly bracket","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unmatched-'}'.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
PHP has encountered a closing curly brackets, but has no related opening curly bracket. 

In more complex situations, there might be opening and closing brackets: this error reports that there are more closing ones than opening. Eventually, some will not have a matching bracket.

Inside double-quoted strings, the unmatched closing brackets are ignored, and used as literal value.

Example
_______

.. code-block:: php

   <?php
   
   $a = 1 + 2}
   
   // 3 opening, 4 closing. 
   {{{$b = 1 + 2}}}}
   
   // this unmatched closing bracket is taken as literal
   $b = "$a} = 1+2"; 
   
   ?>

Solutions
_________

+ Remove the closing curly bracket.
+ Add an opening closing curly bracket.

Related Error Messages
______________________

+ :ref:`unclosed-'{'`
+ :ref:`unmatched-']'`
+ :ref:`unmatched-')'`
+ :ref:`unclosed-'('-does-not-match-']'`
+ :ref:`syntax-error,-unexpected-string-content`
