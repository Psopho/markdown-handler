Markdown Handler
================

This little script adds an Apache handler that lets you view Markdown
files with a .md extension more prettily on your webserver.

It's based on a PHP Markdown implementation by [Michel
Fortin](http://www.michelf.com/).


Installation
------------
Add this to httpd.conf
> Action markdown /markdown/handler.php

> AddHandler markdown .md


Now visit a .md file on your webserver; you should see it as properly
styled HTML.


# H1 Heading

## H2 Heading

### H3 Heading

#### H4 Heading

##### H5 Heading

###### H6 Heading

Normal Text *Italic Text* **Bold Text**

More Normal Text

* List one
* List Two

- List three
- List four

> Block quoted
> Something or other

http://daringfireball.net/projects/markdown/
