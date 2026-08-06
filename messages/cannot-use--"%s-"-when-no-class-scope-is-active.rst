.. _cannot-use--"%s-"-when-no-class-scope-is-active:

Cannot use \"%s\" when no class scope is active
-----------------------------------------------
 
.. meta::
	:description:
		Cannot use \"%s\" when no class scope is active: ``self`` and ``static`` refer to the class in which the code is written, respectively as a fixed reference and one resolved at call time (late static binding).
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use \&quot;%s\&quot; when no class scope is active
	:og:description: ``self`` and ``static`` refer to the class in which the code is written, respectively as a fixed reference and one resolved at call time (late static binding)
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use--%22%25s-%22-when-no-class-scope-is-active.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use \"%s\" when no class scope is active
	:twitter:description: Cannot use \"%s\" when no class scope is active: ``self`` and ``static`` refer to the class in which the code is written, respectively as a fixed reference and one resolved at call time (late static binding)
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use--\"%s-\"-when-no-class-scope-is-active.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use--\"%s-\"-when-no-class-scope-is-active.html","name":"Cannot use \\\"%s\\\" when no class scope is active","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 11:31:13 +0000","dateModified":"Wed, 05 Aug 2026 11:31:13 +0000","description":"``self`` and ``static`` refer to the class in which the code is written, respectively as a fixed reference and one resolved at call time (late static binding)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use--\"%s-\"-when-no-class-scope-is-active.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``self`` and ``static`` refer to the class in which the code is written, respectively as a fixed reference and one resolved at call time (late static binding). Both require an active class scope: they can only be used inside a class, trait, or enum, not in a plain function nor at the top level of a script.

This error appears when ``self`` or ``static`` is used as a class reference, for instance to instantiate an object, call a static method, or fetch a class constant, outside of any class definition.

Example
_______

.. code-block:: php

   <?php
   
   function foo() {
       return new self();
   }
   
   ?>


Literal Examples
****************
+ Cannot use "self" when no class scope is active
+ Cannot use "static" when no class scope is active

Solutions
_________

+ Use the actual class name instead of ``self`` or ``static``.
+ Move the code inside a class, trait, or enum.

Related Error Messages
______________________

+ :ref:`cannot-use--"parent-"-when-no-class-scope-is-active`
+ :ref:`cannot-use--"parent-"-when-current-class-scope-has-no-parent`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
