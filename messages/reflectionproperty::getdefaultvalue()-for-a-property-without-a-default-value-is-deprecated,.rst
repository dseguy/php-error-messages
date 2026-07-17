.. _reflectionproperty::getdefaultvalue()-for-a-property-without-a-default-value-is-deprecated,:

ReflectionProperty::getDefaultValue() for a property without a default value is deprecated, use ReflectionProperty::hasDefaultValue() to check if the default value exists
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		ReflectionProperty::getDefaultValue() for a property without a default value is deprecated, use ReflectionProperty::hasDefaultValue() to check if the default value exists: ``ReflectionProperty::getDefaultValue()`` returns ``null`` both when the property genuinely defaults to ``null`` and when the property has no default value at all (such as an uninitialized typed property), so the return value alone cannot tell the two cases apart.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: ReflectionProperty::getDefaultValue() for a property without a default value is deprecated, use ReflectionProperty::hasDefaultValue() to check if the default value exists
	:og:description: ``ReflectionProperty::getDefaultValue()`` returns ``null`` both when the property genuinely defaults to ``null`` and when the property has no default value at all (such as an uninitialized typed property), so the return value alone cannot tell the two cases apart
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/reflectionproperty%3A%3Agetdefaultvalue%28%29-for-a-property-without-a-default-value-is-deprecated%2C.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: ReflectionProperty::getDefaultValue() for a property without a default value is deprecated, use ReflectionProperty::hasDefaultValue() to check if the default value exists
	:twitter:description: ReflectionProperty::getDefaultValue() for a property without a default value is deprecated, use ReflectionProperty::hasDefaultValue() to check if the default value exists: ``ReflectionProperty::getDefaultValue()`` returns ``null`` both when the property genuinely defaults to ``null`` and when the property has no default value at all (such as an uninitialized typed property), so the return value alone cannot tell the two cases apart
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/reflectionproperty::getdefaultvalue()-for-a-property-without-a-default-value-is-deprecated,.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/reflectionproperty::getdefaultvalue()-for-a-property-without-a-default-value-is-deprecated,.html","name":"ReflectionProperty::getDefaultValue() for a property without a default value is deprecated, use ReflectionProperty::hasDefaultValue() to check if the default value exists","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 08:13:00 +0000","dateModified":"Wed, 15 Jul 2026 08:13:00 +0000","description":"``ReflectionProperty::getDefaultValue()`` returns ``null`` both when the property genuinely defaults to ``null`` and when the property has no default value at all (such as an uninitialized typed property), so the return value alone cannot tell the two cases apart","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/reflectionproperty::getdefaultvalue()-for-a-property-without-a-default-value-is-deprecated,.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``ReflectionProperty::getDefaultValue()`` returns ``null`` both when the property genuinely defaults to ``null`` and when the property has no default value at all (such as an uninitialized typed property), so the return value alone cannot tell the two cases apart. Calling it for a property that has no default value is now deprecated in favour of an explicit existence check.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       public int $prop;
   }
   
   $r = new ReflectionProperty(X::class, 'prop');
   var_dump($r->getDefaultValue());
   
   ?>


Literal Examples
****************
+ ReflectionProperty::getDefaultValue() for a property without a default value is deprecated, use ReflectionProperty::hasDefaultValue() to check if the default value exists

Solutions
_________

+ Call ``ReflectionProperty::hasDefaultValue()`` first, and only call ``getDefaultValue()`` once a default value is confirmed to exist.

Related Error Messages
______________________

+ :ref:`reflectionclass::getconstant()-for-a-non-existent-constant-is-deprecated,`

See Also
________

+ `ReflectionProperty::getDefaultValue <https://www.php.net/manual/en/reflectionproperty.getdefaultvalue.php>`_
+ `ReflectionProperty::hasDefaultValue <https://www.php.net/manual/en/reflectionproperty.hasdefaultvalue.php>`_

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `ReflectionProperty::getDefaultValue <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/ReflectionProperty::getDefaultValue.html>`_.
