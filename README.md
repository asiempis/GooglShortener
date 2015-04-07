# GooglShortener

Multi URL Goo.gl Shortener in PHP

## Basic Usage

### Shorten a list of long URLs

``` php
# Paste your list of urls to the textarea and click generate
# Below the form you will find the shortened urls
```

### Authentication

The Google URL Shortener API supports the OAuth and ClientLogin mechanisms for authenticating.

For shorten requests, each short URL for an authenticated user is unique, and thus will gather unique click statistics. In addition, it shows up on the user's dashboard at http://goo.gl.

Go to http://goo.gl to see URL statistics.


### How to obtain a Free Google API Key:

1. Visit console.developers.google.com
2.Create a new project
3. Click APIs Under the APIs & auth menu
4. Enable URL Shortener API
5. Click Credentials under the APIs & auth menu
6. Create a new browser key
7. Copy and paste the google api key into generate.php
```
