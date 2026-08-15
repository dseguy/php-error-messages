.. _using-the-\$num_points-parameter-is-deprecated:

Using the $num_points parameter is deprecated
---------------------------------------------
 
.. meta::
	:description:
		Using the $num_points parameter is deprecated: ``imagepolygon()`` and ``imagefilledpolygon()`` take an array of point coordinates and a ``$num_points`` argument stating how many vertices that array describes.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Using the $num_points parameter is deprecated
	:og:description: ``imagepolygon()`` and ``imagefilledpolygon()`` take an array of point coordinates and a ``$num_points`` argument stating how many vertices that array describes
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/using-the-%24num_points-parameter-is-deprecated.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Using the $num_points parameter is deprecated
	:twitter:description: Using the $num_points parameter is deprecated: ``imagepolygon()`` and ``imagefilledpolygon()`` take an array of point coordinates and a ``$num_points`` argument stating how many vertices that array describes
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/using-the-$num_points-parameter-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/using-the-$num_points-parameter-is-deprecated.html","name":"Using the $num_points parameter is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:56:49 +0000","dateModified":"Tue, 11 Aug 2026 20:56:49 +0000","description":"``imagepolygon()`` and ``imagefilledpolygon()`` take an array of point coordinates and a ``$num_points`` argument stating how many vertices that array describes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/using-the-$num_points-parameter-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``imagepolygon()`` and ``imagefilledpolygon()`` take an array of point coordinates and a ``$num_points`` argument stating how many vertices that array describes. In practice, ``$num_points`` is almost always equal to ``count($points) / 2``, since the array must contain the x/y pairs for exactly that many points.

Because the value is redundant with the actual size of ``$points``, and mismatches between the two used to be a common source of bugs (or of manual, brittle ``count() / 2`` computations at every call site), the ``$num_points`` argument is deprecated as of PHP 8.1.0 in favor of omitting it and letting PHP derive the point count from the array itself.

Example
_______

.. code-block:: php

   <?php
   
   $im = imagecreatetruecolor(100, 100);
   $color = imagecolorallocate($im, 255, 0, 0);
   $points = [10, 10, 50, 90, 90, 10];
   
   imagepolygon($im, $points, 3, $color);
   
   ?>

Solutions
_________

+ Omit ``$num_points`` entirely, e.g. ``imagepolygon($im, $points, $color)``; ``$points`` must then contain an even number of elements.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `imagepolygon <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/imagepolygon.html>`_, `imagefilledpolygon <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/imagefilledpolygon.html>`_.
