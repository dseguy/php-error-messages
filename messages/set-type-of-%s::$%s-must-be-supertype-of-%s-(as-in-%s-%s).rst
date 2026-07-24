.. _set-type-of-%s::\$%s-must-be-supertype-of-%s-(as-in-%s-%s):

Set type of %s::$%s must be supertype of %s (as in %s %s)
---------------------------------------------------------
 
.. meta::
	:description:
		Set type of %s::$%s must be supertype of %s (as in %s %s): A property hooked with a ``set`` hook can accept a wider range of values than its declared (``get``) type, since the ``set`` hook is free to convert or narrow whatever it receives before storing it.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Set type of %s::$%s must be supertype of %s (as in %s %s)
	:og:description: A property hooked with a ``set`` hook can accept a wider range of values than its declared (``get``) type, since the ``set`` hook is free to convert or narrow whatever it receives before storing it
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/set-type-of-%25s%3A%3A%24%25s-must-be-supertype-of-%25s-%28as-in-%25s-%25s%29.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Set type of %s::$%s must be supertype of %s (as in %s %s)
	:twitter:description: Set type of %s::$%s must be supertype of %s (as in %s %s): A property hooked with a ``set`` hook can accept a wider range of values than its declared (``get``) type, since the ``set`` hook is free to convert or narrow whatever it receives before storing it
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/set-type-of-%s::$%s-must-be-supertype-of-%s-(as-in-%s-%s).html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/set-type-of-%s::$%s-must-be-supertype-of-%s-(as-in-%s-%s).html","name":"Set type of %s::$%s must be supertype of %s (as in %s %s)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 24 Jul 2026 16:14:47 +0000","dateModified":"Fri, 24 Jul 2026 16:14:47 +0000","description":"A property hooked with a ``set`` hook can accept a wider range of values than its declared (``get``) type, since the ``set`` hook is free to convert or narrow whatever it receives before storing it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/set-type-of-%s::$%s-must-be-supertype-of-%s-(as-in-%s-%s).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A property hooked with a ``set`` hook can accept a wider range of values than its declared (``get``) type, since the ``set`` hook is free to convert or narrow whatever it receives before storing it. In the example, ``I::$prop`` accepts both ``int`` and ``string`` on write, even though it only ever reads back as ``string``.

When a class overrides such a property, whether by extending a parent class or implementing an interface, the type accepted on write by the new declaration must remain a supertype of (or equal to) the type accepted by the original declaration. It must not be narrowed.

In the example, ``C::$prop`` is a plain property, so it can only be assigned values of its own declared type, ``string``. This is narrower than the ``int|string`` accepted by ``I::$prop``'s ``set`` hook, so code that relied on ``I``'s contract to pass an ``int`` to $prop would break. Consequently, PHP rejects the composition.

Example
_______

.. code-block:: php

   <?php
   
   interface I {
       public string $prop {
           set(int|string $value);
       }
   }
   
   class C implements I {
       public string $prop;
   }
   
   ?>


Literal Examples
****************
+ Set type of C::$prop must be supertype of string|int (as in interface I)

Solutions
_________

+ Give the child property (or its ``set`` hook parameter) a type that is the same as, or a supertype of, the type accepted by the parent's ``set`` hook.
+ Add an explicit ``set`` hook to the child property, accepting the same or a wider type than the parent.
+ Narrow the type accepted by the parent's ``set`` hook instead, if the wider type is not actually needed.

Related Error Messages
______________________

+ :ref:`type-of-parameter-$%s-of-hook-%s::$%s::set-must-be-compatible-with-property-type`
+ :ref:`type-of-%s::$%s-must-be-%s%s-(as-in-class-%s)`
+ :ref:`set-access-level-of-%s::$%s-must-be-%s-(as-in-class-%s)%s`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
