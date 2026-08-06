.. _%s-"-is-not-a-supported-builtin-type-and-will-be-interpreted-as-a-class-name.-write--"--%s-"%s-to-suppress-this-warning:

%s\" is not a supported builtin type and will be interpreted as a class name. Write \"\\%s\"%s to suppress this warning
-----------------------------------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		%s\" is not a supported builtin type and will be interpreted as a class name. Write \"\\%s\"%s to suppress this warning: ``resource`` looks like it should be a builtin type, since it is one of the values returned by ``gettype()``, but it was never turned into an actual type declaration: there is no way to name a specific kind of resource (file handle, curl handle.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: %s\&quot; is not a supported builtin type and will be interpreted as a class name. Write \&quot;\\%s\&quot;%s to suppress this warning
	:og:description: ``resource`` looks like it should be a builtin type, since it is one of the values returned by ``gettype()``, but it was never turned into an actual type declaration: there is no way to name a specific kind of resource (file handle, curl handle
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s-%22-is-not-a-supported-builtin-type-and-will-be-interpreted-as-a-class-name.-write--%22--%25s-%22%25s-to-suppress-this-warning.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: %s\" is not a supported builtin type and will be interpreted as a class name. Write \"\\%s\"%s to suppress this warning
	:twitter:description: %s\" is not a supported builtin type and will be interpreted as a class name. Write \"\\%s\"%s to suppress this warning: ``resource`` looks like it should be a builtin type, since it is one of the values returned by ``gettype()``, but it was never turned into an actual type declaration: there is no way to name a specific kind of resource (file handle, curl handle
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s-\"-is-not-a-supported-builtin-type-and-will-be-interpreted-as-a-class-name.-write--\"--%s-\"%s-to-suppress-this-warning.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s-\"-is-not-a-supported-builtin-type-and-will-be-interpreted-as-a-class-name.-write--\"--%s-\"%s-to-suppress-this-warning.html","name":"%s\\\" is not a supported builtin type and will be interpreted as a class name. Write \\\"\\\\%s\\\"%s to suppress this warning","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 08:58:05 +0000","dateModified":"Thu, 06 Aug 2026 08:58:05 +0000","description":"``resource`` looks like it should be a builtin type, since it is one of the values returned by ``gettype()``, but it was never turned into an actual type declaration: there is no way to name a specific kind of resource (file handle, curl handle","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/%s-\"-is-not-a-supported-builtin-type-and-will-be-interpreted-as-a-class-name.-write--\"--%s-\"%s-to-suppress-this-warning.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``resource`` looks like it should be a builtin type, since it is one of the values returned by ``gettype()``, but it was never turned into an actual type declaration: there is no way to name a specific kind of resource (file handle, curl handle...) in a type.

Since ``resource`` is not a reserved word, PHP does not reject it: it silently treats it as the name of a class or interface called ``resource``, which almost never exists, and any call with an actual resource argument then fails with a TypeError.

To help catch the mistake, the compiler emits this warning as soon as it sees the bare word ``resource`` in a type position and no class or interface with that name has been imported: it assumes a builtin type was intended. The comparison is case-sensitive, so a capitalized ``Resource`` -- more plausible as a genuine class name -- does not trigger it.

Example
_______

.. code-block:: php

   <?php
   
   function readFile(resource $handle): void {
       fclose($handle);
   }
   
   ?>


Literal Examples
****************
+ "resource" is not a supported builtin type and will be interpreted as a class name. Write "\resource" to suppress this warning

Solutions
_________

+ Remove the type declaration, or replace it with ``mixed``, since resources cannot be typed more precisely.
+ Prefix the name with a backslash, as in ``\resource``, to tell PHP that a class actually called ``resource`` is meant, which suppresses the warning.
+ If a class or interface named ``resource`` exists in the current namespace, import it with a ``use`` statement so PHP recognizes it, which also suppresses the warning.

Related Error Messages
______________________

+ :ref:`%s-"-will-be-interpreted-as-a-class-name.-did-you-mean--"%s-"?-write--"--%s-"%s-to-suppress-this-warning`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
