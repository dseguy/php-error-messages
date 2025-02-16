.. _'goto'-into-loop-or-switch-statement-is-disallowed:

'goto' into loop or switch statement is disallowed
--------------------------------------------------
 
.. meta::
	:description:
		'goto' into loop or switch statement is disallowed: It is not possible to put a label inside a loop (for, foreach, while, do.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: &#039;goto&#039; into loop or switch statement is disallowed
	:og:description: It is not possible to put a label inside a loop (for, foreach, while, do
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%27goto%27-into-loop-or-switch-statement-is-disallowed.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: 'goto' into loop or switch statement is disallowed
	:twitter:description: 'goto' into loop or switch statement is disallowed: It is not possible to put a label inside a loop (for, foreach, while, do
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/'goto'-into-loop-or-switch-statement-is-disallowed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/'goto'-into-loop-or-switch-statement-is-disallowed.html","name":"'goto' into loop or switch statement is disallowed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"It is not possible to put a label inside a loop (for, foreach, while, do","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/'goto'-into-loop-or-switch-statement-is-disallowed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
It is not possible to put a label inside a loop (for, foreach, while, do...while...) or a switch call. Such statement have to be initialized before execution, and the goto would cut short this crucial step.

On the other hand, it is possible to jump from a loop or a switch to outside that structure: then, it terminates it.

It is also possible to use a goto within a loop and a switch.

This is a compilation error: it is detected before execution.

Example
_______

.. code-block:: php

   <?php
   
   function foo() {
   	goto A;
   	
   	foreach($a as $b) {
   		A:
   	}
   }
   
   function bar() {
   	goto A;
   	
   	switch($a) {
   		case 1:
   			A:
   			
   			break;
   	}
   }
   
   ?>

Solutions
_________

+ Create a separate method to handle this specific case.
