# Failed to open stream: Too many open files

## Description
This error has two aspects: first, PHP tried to read a file and failed. This is the first part, where files are mentioned as streams. Streams are a more generic version of files: they may be local files, on the file system, or they may be remote, via any kind of protocol, or even, created on the fly by other processes.

The second aspect is a detailed version of the previous: the file failed to be read because the current process has reached the maximum number of possible files to read. This is a system limit, which prevents processes to open an unlimited number of files. Usually, reaching such limit means that the code is opening files carelessly. 

To check this limit, run the system command `ulimit -n` on Linux systems.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/failed-to-open-stream:-too-many-open-files.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/failed-to-open-stream:-too-many-open-files.html","name":"Failed to open stream: Too many open files","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"This error has two aspects: first, PHP tried to read a file and failed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/failed-to-open-stream:-too-many-open-files.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

parse_ini_file('/path/to/file.ini');

?>
```

## Alternatives
+ Review the code to limit the number of opened files and sockets.
+ Raise the limit of opened files for the process, by using ``ulimit -n 10000`` (or more, if necessary).

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()