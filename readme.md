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

## Running a local copy

Here's an incomplete list of steps for getting a localhost version of this
repo up and running. (You're on your own if you're on Windows, most of the
actions are relevant but I have no idea what crazy install/config voodoo
you'll need to make it work.)

* Install git if you need to. http://git-scm.org/
* Copy this repo URL. Find the address bar near the top, select 'ssh', and hit the clipboard icon to the right.
* Open a terminal window. Use 'cd' to browse to the parent folder you want the repo to exist in. Hit Cmd+V and Return.
* That'll take a while. While it's downloading, go get and install a localhost server environment like MAMP (http://www.mamp.info/en/index.html) -- or configure your local Apache/PHP if you prefer.
* (two things still to document: pointing MAMP to arbitrary locations, and mapping localhost hostnames)
