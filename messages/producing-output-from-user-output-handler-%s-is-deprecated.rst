.. _producing-output-from-user-output-handler-%s-is-deprecated:

Producing output from user output handler %s is deprecated
----------------------------------------------------------
 
.. meta::
	:description:
		Producing output from user output handler %s is deprecated: A user output handler registered with ``ob_start()`` is expected to receive the current buffer contents and return the (possibly transformed) string to send further down the output stack.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Producing output from user output handler %s is deprecated
	:og:description: A user output handler registered with ``ob_start()`` is expected to receive the current buffer contents and return the (possibly transformed) string to send further down the output stack
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/producing-output-from-user-output-handler-%25s-is-deprecated.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Producing output from user output handler %s is deprecated
	:twitter:description: Producing output from user output handler %s is deprecated: A user output handler registered with ``ob_start()`` is expected to receive the current buffer contents and return the (possibly transformed) string to send further down the output stack
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/producing-output-from-user-output-handler-%s-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/producing-output-from-user-output-handler-%s-is-deprecated.html","name":"Producing output from user output handler %s is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:55:26 +0000","dateModified":"Tue, 11 Aug 2026 20:55:26 +0000","description":"A user output handler registered with ``ob_start()`` is expected to receive the current buffer contents and return the (possibly transformed) string to send further down the output stack","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/producing-output-from-user-output-handler-%s-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A user output handler registered with ``ob_start()`` is expected to receive the current buffer contents and return the (possibly transformed) string to send further down the output stack. Historically, nothing prevented such a handler from also producing its own output directly (for instance with ``echo`` or ``print``), in addition to returning a value.

Output produced this way bypasses the normal buffering contract and is silently discarded, which usually indicates a bug in the handler rather than an intentional behavior. As of PHP 8.5.0, doing so raises a deprecation notice naming the offending handler.

Example
_______

.. code-block:: php

   <?php
   
   ob_start(function (string $buffer): string {
       // Directly emitting output from the handler, instead of
       // only returning the transformed buffer.
       echo 'debug: ', strlen($buffer), " bytes\n";
   
       return $buffer;
   });
   
   echo 'Hello world';
   ob_end_flush();
   
   ?>

Solutions
_________

+ Only communicate the processed content through the handler's return value; do not ``echo``/``print`` from within it.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `ob_start <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/ob_start.html>`_.
