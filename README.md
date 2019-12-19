
# Conference Website Template

This is intended for all IACR conference websites (Crypto, Eurocrypt,
Asiacrypt, CHES, FSE, PKC, RWC, and TCC). If you are doing some other
conference, then [see below](#advanced-other-conferences).

This is a complete rewrite of the IACR conference template.  The
previous version of this template was written in javascript and
Bootstrap 3, but this one is written mostly in php and Bootstrap 4.
You should not mix the old version with the new version,
because they are incompatible.  The old template has been deprecated
and you should not copy the pages from an old conference.  That
version has been abandoned and there will be no futher updates.

___

# INSTALLATION

You will need to have [php](https://www.php.net/manual/en/install.php)
installed on the machine you work on.  These are already installed on
the iacr.org machine, but it's best to work on your local machine, and
only push files to the live server once you are satisfied with them.

In order to get started with the template, simply open a shell, change
to your working directory, and type:

```
git clone https://github.com/kmccurley/conference-template.git .
```
**(NOTE THE DOT AT THE END OF THE PREVIOUS LINE)**

If you do not have git installed, then you can download a [zip file
with the
template](https://github.com/IACR/conference-template/archive/master.zip).
This creates a copy of the files for the site on your machine.  Next
make sure you are in the directory containing `acceptedpapers.php` and
run the command

```
php -S localhost:8000
```

Then point your browser at http://localhost:8000 to see the website.
Once you’ve verified it’s serving correctly, you can begin to edit the
relevant files.

## REQUIRED: THE BASICS

### Changing the conference names/dates/location

Assuming that your conference is listed in the [IACR calendar of
events](https://iacr.org/events), you should be able to download the
`json/metadata.json` file from
[http://iacr.org/cryptodb/pc](http://iacr.org/cryptodb/pc).  This file
contains year, conference names, latitude, longitude, etc, and the
settings there show up on all pages of the site. The `year` field should
match the path of the directory that you host your pages from on
iacr.org.

### Changing the names of the program committee

The program committee is stored in `json/comm.json`. You should go to
[http://iacr.org/cryptodb/pc](http://iacr.org/cryptodb/pc)
to download your program committee file. The IDs in the file are used
to enter the program committee into [Cryptodb](https://iacr.org/cryptodb)
so be careful if you edit this file by hand.


### Changing the contact information

The program chairs and general chair appear on both `callforpapers.php`
and `contact.php`. You will want to edit these.

### Updating the code of conduct page

Section 8.10 of the [General Chair
Guidelines](https://www.iacr.org/docs/genchair.pdf) requires an up to
date code of conduct for each conference. You should edit the
`conduct.php` accordingly. Sections that need editing will show up in
red on the page because they contain a span with class editMe.

At this point you should have a working first site, and you should copy
your files over to the iacr.org server in the appropriate directory.

### Adding your page content to individual pages (`*.php`)

All pages have included boilerplate content, most of which is
commented out.  You will need to go through each individual page and
edit content that does not pertain to your conference, as well as add
your own information.

We **strongly** recommend proofreading the HTML to make sure all content
relates to your specific conference. Some content may not be ready at
the time that you first put your site up, so you can comment things
out in the pages with standard HTML comments &lt;!--  ... --&gt;

#### To delete a page

You may not need every page (e.g., you may not have a rump session).
You can omit a page by deleting the php file and removing the link to
it in `includes/nav.php` (or anywhere else in the php files).

#### To add a new page

Let's say you want a separate page for an affiliated event called
`event1.php`. You would create the page by copying `empty.php` to
`event1.php`, add the link to the file in `includes/nav.php`, and then
edit `event1.php` to add your content.

___

# Deployment to the IACR server

In order to host your website on the iacr.org server, you will need
login credentials from the IACR webmaster. You will then be
assigned a directory like `/var/www/asiacrypt/html/2021`) for your
conference. If you place all the files from the template in that
directory, you will immediately be able to reference it via
https://asiacrypt.iacr.org/2021. Obviously you should substitute
asiacrypt with the name of your conference (e.g., crypto, eurocrypt,
rwc, tcc, etc).

The URLs on iacr.org start with
&lt;conference_name&gt;.iacr.org/&lt;year&gt;/ and for this reason the
root URL for the site is not at the root of the server. The file
`includes/nav.php` has a function that computes the base URL from 
the server name, and should work on both your local machine and the
iacr.org server.

___

# Additional steps

When you first put up your site, you will probably only have basic information
about the call for papers, the program committee, the dates, etc. Later
on you will want to add more information in the individual pages:

* travel information
* visa information
* the link to the paper submission server.
* applications for affiliated events
* announcements of affiliated events.
* the list of accepted papers
* abstracts and biographies for invitedtalks.php
* the program
* the link to the registration server on secure.iacr.org.
* information about the rump session (if you have one)
* information about corporate sponsors (if any)

### Accepted papers

The list of accepted papers is stored in `json/papers.json`, and can
be exported from websubrev.

### Program

The program is more complicated, but there is a tool at
[https://www.iacr.org/tools/program](https://iacr.org/tools/program)
to help you create the program from the list of accepted papers. This
tool provides you with an exported JSON file `json/program.json` that
will display your program on the program.php page. The program will
probably need updating several times when you add session chairs,
links to papers, links to slides, etc. The
[tool](https://iacr.org/tools/program) is designed to make this
process very easy.

### Travel information

Travel information resides in `travel.php` but there is an additional
page for visas if you need one.  The `travel.php` page incorporates a
map that is centered at the latitude, longitude contained in
[`json/metadata.json`](json/metadata.json).  It was assumed that your
latitude, longitude is the location of the venue, so please check
that. There is a piece of javascript in `travel.php` that places pins
on the map at the appropriate places, and you should update that to
provide information about airport, train station, hotels, or locations
of outings in order to help people plan their trip. There is a tool at
[https://iacr.org/tools/geocode/](https://iacr.org/tools/geocode/)
that will assist you in locating the latitude, longitude of points on a
map.

___

# Optional Customization

### Changing the default colors

The colors are set by including a css file in the `styles/` directory.
This is controlled in the file `includes/head.php`, which by default
includes `styles/orange_theme.css`. You can change that to any file of
the `styles/*_theme.css` files (or make your own). This will change
the color scheme for the entire site. We recommend that you try a few
to see what you prefer. Each theme uses a different banner image, but
the next section has instructions to change that.

You may need to [disable the browser
cache](https://en.wikipedia.org/wiki/Wikipedia:Bypass_your_cache) to
see the change, because browsers ordinarily cache css and javascript
files.  You might also try
[(chrome)](https://nicholasbering.ca/tools/2016/10/09/devtools-disable-caching/)
or [(firefox)](https://support.mozilla.org/en-US/questions/1103414)
instructions.

___

### Changing the header image

Once you choose a color theme, you can also choose a header image.
The header image is specified in the themes file mentioned in the
previous section, as `.headerImg`. There are several default images
located in the `images/banners/` directory. Each theme currently uses
a different banner, but you can freely mix them by changing the
`.headerImg` setting in the theme css file that you select.

If you want to remove the background image in the header, delete or
comment out `.headerImg{background-size}`,
`.headerImg{background-image}`, and `.headerImg{background-position}`
in your css file from `styles/`.

If you want to use a custom image, it *must* be 1200x480px or larger
(note that larger may affect page load time). Acceptable file formats
are .jpg, .png, .svg, or .gif. You should not use an animated gif, as
this has the potential to be supremely annoying and/or negatively
affect page load times.

Removing the header image will not remove the gradient effect. If you
would like to remove the gradient effect independent of the header
image, delete or comment out the background on .headerGradient in
`styles/theme.css`.

___

### Adding an update to the "Website Updates" panel on index.php

#### IS THIS STILL RELEVANT?

Look for the NOTE in `index.php` that says "add new website updates below this".
Copy/paste the following:
```
<div class="row">
  <div class="col-4">
    <p class="dateTitle">
      DATE OF UPDATE
    </p>
  </div>
  <div class="col-8">
    <p class="dateText">
      TEXT OF UPDATE
    </p>
  </div>
</div>
<hr />
```
and edit as desired.

# Advanced topics

What were we going to put here?

* How to use this on something other than iacr.org?
* Updating using git.