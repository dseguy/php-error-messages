.. _call-to-%s-%s::__destruct()-from-global-scope-during-shutdown-ignored:

Call to %s %s::__destruct() from global scope during shutdown ignored
---------------------------------------------------------------------
 
.. meta::
	:description:
		Call to %s %s::__destruct() from global scope during shutdown ignored: During PHP shutdown, destructors are called for remaining objects.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Call to %s %s::__destruct() from global scope during shutdown ignored
	:og:description: During PHP shutdown, destructors are called for remaining objects
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/call-to-%25s-%25s%3A%3A__destruct%28%29-from-global-scope-during-shutdown-ignored.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Call to %s %s::__destruct() from global scope during shutdown ignored
	:twitter:description: Call to %s %s::__destruct() from global scope during shutdown ignored: During PHP shutdown, destructors are called for remaining objects
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/call-to-%s-%s::__destruct()-from-global-scope-during-shutdown-ignored.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/call-to-%s-%s::__destruct()-from-global-scope-during-shutdown-ignored.html","name":"Call to %s %s::__destruct() from global scope during shutdown ignored","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 17:37:02 +0000","dateModified":"Mon, 13 Jul 2026 17:37:02 +0000","description":"During PHP shutdown, destructors are called for remaining objects","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/call-to-%s-%s::__destruct()-from-global-scope-during-shutdown-ignored.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
During PHP shutdown, destructors are called for remaining objects. When a ``__destruct()`` method is invoked from global scope (i.e. not as part of object destruction triggered by the garbage collector or script end), PHP emits this warning and ignores the call.

This typically happens when a ``register_shutdown_function()`` callback creates an object whose destructor is called during the final cleanup phase. The object is destroyed immediately, but the invocation from global scope is considered invalid.

The warning ensures that destructors are only called in their expected context: as part of object lifetime management, not from arbitrary global code.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       public function __destruct() {
           echo "Destroying\n";
       }
   }
   
   register_shutdown_function(function() {
       $x = new X;
   });
   
   ?>


Literal Examples
****************
+ Call to public X::__destruct() from global scope during shutdown ignored
+ Call to protected X::__destruct() from global scope during shutdown ignored

Solutions
_________

+ Move the logic from ``__destruct()`` into a regular method and call it explicitly before the object is destroyed.
+ Avoid creating objects inside shutdown functions if you rely on their destructor behavior.
+ Use a dedicated lifecycle method instead of relying on ``__destruct()`` for cleanup logic.

See Also
________

+ `__destruct <https://www.php.net/manual/en/language.oop5.decon.php>`_
+ `register_shutdown_function <https://www.php.net/manual/en/function.register-shutdown-function.php>`_

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
