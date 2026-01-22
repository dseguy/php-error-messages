.. _providing-individual-callbacks-instead-of-an-object-implementing-sessionhandlerinterface-is-deprecated:

Providing individual callbacks instead of an object implementing SessionHandlerInterface is deprecated
------------------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		Providing individual callbacks instead of an object implementing SessionHandlerInterface is deprecated: ``session_set_save_handler()`` used to accept six to to nine distinct callables to configure the handler.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Providing individual callbacks instead of an object implementing SessionHandlerInterface is deprecated
	:og:description: ``session_set_save_handler()`` used to accept six to to nine distinct callables to configure the handler
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/providing-individual-callbacks-instead-of-an-object-implementing-sessionhandlerinterface-is-deprecated.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Providing individual callbacks instead of an object implementing SessionHandlerInterface is deprecated
	:twitter:description: Providing individual callbacks instead of an object implementing SessionHandlerInterface is deprecated: ``session_set_save_handler()`` used to accept six to to nine distinct callables to configure the handler
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/providing-individual-callbacks-instead-of-an-object-implementing-sessionhandlerinterface-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/providing-individual-callbacks-instead-of-an-object-implementing-sessionhandlerinterface-is-deprecated.html","name":"Providing individual callbacks instead of an object implementing SessionHandlerInterface is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 24 Sep 2025 17:24:48 +0000","dateModified":"Wed, 24 Sep 2025 17:24:48 +0000","description":"``session_set_save_handler()`` used to accept six to to nine distinct callables to configure the handler","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/providing-individual-callbacks-instead-of-an-object-implementing-sessionhandlerinterface-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``session_set_save_handler()`` used to accept six to to nine distinct callables to configure the handler. In fact, that PHP native function was available even before PHP had objects support. 

Nowadays, there still needs that many callables, but they are expected to be grouped in a class, and checked by the ``SessionHandlerInterface`` interface.

Example
_______

.. code-block:: php

   <?php
   
    session_set_save_handler(
       session_open(...),
       session_close(...),
       session_read(...),
       session_write(...),
       session_destroy(...),
       session_gc(...),
       session_create_sid(...),
       session_validate_sid(...),
       session_update_timestamp(...)
   );
   
   ?>

Solutions
_________

+ Refactor the callables into a class, add the ``SessionHandlerInterface`` implementation and use that class.
