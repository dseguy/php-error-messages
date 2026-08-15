# The parent constructor was not called: the object is in an invalid state

## Description
When extending certain PHP native classes, the child class must call the parent constructor to finish the instantiation of the object.

The problem is not detected at instantiation time, but later, as soon as any of the parent resources are used, but found to be in invalid state.

PHP does not automatically call the parent constructor when creating a child instance. It must be explicit in the code. 

Some classes that needs such initialisation are: `SplFileObject`, `SplDirectory`, `GlobIterator`. The list is not exhaustive.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-parent-constructor-was-not-called:-the-object-is-in-an-invalid-state.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-parent-constructor-was-not-called:-the-object-is-in-an-invalid-state.html","name":"The parent constructor was not called: the object is in an invalid state","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"When extending certain PHP native classes, the child class must call the parent constructor to finish the instantiation of the object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-parent-constructor-was-not-called:-the-object-is-in-an-invalid-state.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php
// PHP bug 8318
class Bug8318 extends \SplFileObject
{
    public function __construct()
    {
    }

    public function fpassthru(): int
    {
        return 0;
    }
}

$cl = new Bug8318;
try {
    $cl->fpassthru();
} catch (\Error $e) {
    var_dump($e);
}
?>
```

## Alternatives
+ Call the parent constructor.
+ Use another parent class.
