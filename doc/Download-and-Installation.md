#Download and Installation
# Get Shaarli!

To install Shaarli, simply place the files in a directory under your webserver's Document Root (or directly at the document root). Make sure your [server](Server-requirements) is properly [configured](Server-configuration).[](.html)

Several releases are available:

--------------------------------------------------------

## Latest release (recommended)
### Download as an archive
Get the latest released version from the [releases](https://github.com/shaarli/Shaarli/releases) page.[](.html)

**Download our *shaarli-full* archive** to include dependencies.

The current latest released version is `v0.8.0`

Or in command lines:

```bash
$ wget https://github.com/shaarli/Shaarli/releases/download/v0.8.0/shaarli-v0.8.0-full.zip
$ unzip shaarli-v0.8.0-full.zip
$ mv Shaarli /path/to/shaarli/
```

|  !  |In most cases, download Shaarli from the [releases](https://github.com/shaarli/Shaarli/releases) page. Cloning using `git` or downloading Github branches as zip files requires additional steps (see below).|[](.html)
|-----|--------------------------|

### Using git

```
mkdir -p /path/to/shaarli && cd /path/to/shaarli/
git clone -b v0.8.0 https://github.com/shaarli/Shaarli.git .
composer update --no-dev
```

--------------------------------------------------------

## Stable version

The stable version has been experienced by Shaarli users, and will receive security updates.

### Download as an archive

As a .zip archive:

```bash
$ wget https://github.com/shaarli/Shaarli/archive/stable.zip
$ unzip stable.zip
$ mv Shaarli-stable /path/to/shaarli/
```

As a .tar.gz archive :

```bash
$ wget https://github.com/shaarli/Shaarli/archive/stable.tar.gz
$ tar xvf stable.tar.gz
$ mv Shaarli-stable /path/to/shaarli/
```

### Clone with Git 

[Composer](https://getcomposer.org/) is required to build a functional Shaarli installation when pulling from git.[](.html)

```bash
$ git clone https://github.com/shaarli/Shaarli.git -b stable /path/to/shaarli/
# install/update third-party dependencies
$ cd /path/to/shaarli/
$ composer update --no-dev
```

--------------------------------------------------------

## Development version (mainline)

_Use at your own risk!_

To get the latest changes from the `master` branch:

```bash
# clone the repository  
$ git clone https://github.com/shaarli/Shaarli.git master /path/to/shaarli/
# install/update third-party dependencies
$ cd /path/to/shaarli
$ composer update --no-dev
```

--------------------------------------------------------

## Finish Installation

Once Shaarli is downloaded and files have been placed at the correct location, open it this location your favorite browser.

![install screenshot](http://i.imgur.com/wuMpDSN.png)[](.html)

Setup your Shaarli installation, and it's ready to use!

--------------------------------------------------------

## Updating Shaarli

See [Upgrade and Migration](Upgrade-and-migration)[](.html)
