# Single CMS #
Single CMS is a simple, safe, editor for a single web page.

It allows a web designer to build a single page site, while allowing a client full control over the content.

Author: Craig Russell [craig@craig-russell.co.uk](craig@craig-rusell.co.uk)    
Web: [craig-russell.co.uk](http://www.craig-russell.co.uk)    
Licence: MIT    

##Update [Jan 2014]
I've not updated this project in a while, and never use it myself anymore. However, it does still get a moderate amount of interest. If anyone whould like to take ownership of this project (perhaps to develop it further) please do get in touch.

## Features ##
*   Simple Easy to use interface
*   Secure Control which tags are permitted in page content
*   Lightweight Requires no database back end
*   Getting Started
*   Using SingleCMS is easy, just follow these steps.

## Getting Started ##
1.  Unpack the zip file on to your PHP server
2.  Make `body.txt` writeable by your web server
3.  Define language and basic settings in `config.php`
4.  Download your language files at http://www.tinymce.com/i18n3x/index.php?ctrl=lang&act=download&pr_id=1 and extract the contents of tinymce_language_pack.zip/tinymce_language_pack/ (which should contain folders "langs", "plugins", and "themes") into js/tiny_mce/.
5.  That's it!

Edit and style `index.php` however you want. Use the php snippets to insert the content wherever you want.

You client can log in at `http://yoursite.com/edit/` using the username and password specified in `config.php`.
