# csszengarden.com

The official repo of the CSS Zen Garden.

Pull requests with improvements welcomed, but remember that changes to the
HTML file affect the entire archive of 200+ designs. If you're changing the
markup, you'll need to commit changes to all designs affected.

If you plan to submit new designs via Github, please create a new branch for
your work and submit that as a pull request. Make sure to update
masterlist.php and zengarden.xml with entries for your submission. Best to
assign your submission a name instead of a number, since those are dependent
on publishing order.

If that makes no sense, just use the traditional submission form here: 
http://www.mezzoblue.com/zengarden/submit/

## Using TypeKit

The CSS Zen Garden fully supports TypeKit. To include custom type in your
submission, first create a TypeKit account and build a custom kit with the
fonts you want to use. Include the Typekit embed code as usual in your local
copy of the Zen Garden HTML file for development.

When you are ready to submit your design, you'll need to copy your Typekit
Kit ID to your CSS file before you submit. This will ensure that, when your
submission is approved, Typekit fonts will continue to work and font usage
won't be charged to your personal account. To do this, copy the Kit ID (found
in the Kit Editor, under "Embed Code" in the upper right corner) and paste it
into a new comment near the top of your CSS file.

    /* TYPEKIT_KIT_ID: <kit-id> */

Replace <kit-id> with your Kit ID. For example, if your Kit ID is "vhu0zxe" 
the resulting comment in your CSS file should be:

    /* TYPEKIT_KIT_ID: vhu0zxe */

Once you added the comment you are ready to submit your design to the CSS Zen
Garden. If you have any questions about using Typekit with your CSS Zen Garden
submission, do not hesitate to contact support@typekit.com.

## Running a local copy

Here's an incomplete list of steps for getting a localhost version of this
repo up and running. (You're on your own if you're on Windows, most of the
actions are relevant but I have no idea what crazy install/config voodoo
you'll need to make it work.)

* Install git if you need to. http://git-scm.org/
* Copy this repo URL. Find the address bar near the top, select 'ssh', and hit
  the clipboard icon to the right.
* Open a terminal window. Use 'cd' to browse to the parent folder you want the 
  repo to exist in. Hit Cmd+V and Return.
* That'll take a while. While it's downloading, go get and install a localhost 
  server environment like MAMP (http://www.mamp.info/en/index.html) -- or 
  configure your local Apache/PHP if you prefer.
* You'll want to point your server to the files you've downloaded. In MAMP, 
  open up the Preferences screen, choose the Apache tab, and hit Select to 
  choose a document root location. Point this to the root folder where this
  repo's files live. If you've done it right you'll be able to point your 
  browser to http://localhost/ and should see a fully navigable version of the
  CSS Zen Garden.

## Submitting Designs

There are two ways to submit a new design. If you're reading this, you're
likely comfortable with issuing a pull request from GitHub -- please feel free
to do it that way. 

Everyone else can just use this submission form: 
http://www.mezzoblue.com/zengarden/submit/