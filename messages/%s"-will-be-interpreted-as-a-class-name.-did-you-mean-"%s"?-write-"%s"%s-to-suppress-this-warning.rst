.. _%s"-will-be-interpreted-as-a-class-name.-did-you-mean-"%s"?-write-"%s"%s-to-suppress-this-warning:

"%s" will be interpreted as a class name. Did you mean "%s"? Write "\%s"%s to suppress this warning
---------------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		"%s" will be interpreted as a class name. Did you mean "%s"? Write "\%s"%s to suppress this warning: PHP offers several native type, such as ``bool`` or ``int``.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: &quot;%s&quot; will be interpreted as a class name. Did you mean &quot;%s&quot;? Write &quot;\%s&quot;%s to suppress this warning
	:og:description: PHP offers several native type, such as ``bool`` or ``int``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s%22-will-be-interpreted-as-a-class-name.-did-you-mean-%22%25s%22%3F-write-%22%25s%22%25s-to-suppress-this-warning.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: "%s" will be interpreted as a class name. Did you mean "%s"? Write "\%s"%s to suppress this warning
	:twitter:description: "%s" will be interpreted as a class name. Did you mean "%s"? Write "\%s"%s to suppress this warning: PHP offers several native type, such as ``bool`` or ``int``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s\"-will-be-interpreted-as-a-class-name.-did-you-mean-\"%s\"?-write-\"%s\"%s-to-suppress-this-warning.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s\"-will-be-interpreted-as-a-class-name.-did-you-mean-\"%s\"?-write-\"%s\"%s-to-suppress-this-warning.html","name":"\"%s\" will be interpreted as a class name. Did you mean \"%s\"? Write \"\\%s\"%s to suppress this warning","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"PHP offers several native type, such as ``bool`` or ``int``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/%s\"-will-be-interpreted-as-a-class-name.-did-you-mean-\"%s\"?-write-\"%s\"%s-to-suppress-this-warning.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
PHP offers several native type, such as ``bool`` or ``int``. These names may also be confused with ``boolean`` and ``integer``, which are not PHP native types. They are valid for custom code usage, including creating classes or interfaces. To avoid such confusion, PHP emits this error message to make sure that ``integer`` is confused with ``int``.

``boolean``, for ``bool``, ``integer``, for ``int``, ``double``, for ``float``, and ``resource``, for ``\resource``, are all subjects to this error.

Example
_______

.. code-block:: php

   <?php
   
   function foo() : boolean {} 
   
   ?>


Literal Examples
****************
+ "boolean" will be interpreted as a class name. Did you mean "bool"? Write "\boolean" to suppress this warning
+ "resource" will be interpreted as a class name. Did you mean "\resource"?

Solutions
_________

+ Use the PHP native type.
+ Create a ``use`` statement for the actual type.
+ Add the initial ``\`` with this name.
