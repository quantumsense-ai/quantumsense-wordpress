# QuantumSense Website: WordPress

WordPress project defining the [QuantumSense website](https://quantumsense.ch/).

> See also the [**quantumsense**](https://github.com/quantumsense-ai/quantumsense) repository.

## Description

This repository contains the WordPress project that is used to develop the QuantumSense website that is hosted in the [**quantumsense**](https://github.com/quantumsense-ai/quantumsense) repository.

The website is always edited through the WordPress project in this repository. After making changes to WordPress, the website is then exported from WordPress as a static website and saved in the **quantumsense** repository. The export is done with the [Simply Static](https://simplystatic.com/) WordPress plugin (see instructions below).

The WordPress project itself is supposed to be locally hosted with [Local](https://localwp.com/) during development.

## Instructions

To edit and publish the website, proceed as follows:

>  The following assumes that the WordPress project is already set up on the local machine with [Local](https://localwp.com/).

1. Make sure you have a local clone of the [**quantumsense**](https://github.com/quantumsense-ai/quantumsense) repository
1. Make sure that the Simply Static plugin in the WordPress project is configured as follows:
   1. _Deployment > Deployment Method_ is set to _Local Directory_
   1. _Deployment > Local Directory > Path_ is set to the `docs` directory in the local clone of the **quantumsense** repository
   1. _Misc > Additional Settings > Clear Directory_ is enabled
1. Edit the website through WordPress as usual
1. After making changes, restart the WordPress instance in Local (_right-click > Restart_)
   - This is to ensure that all changes are written to disk
1. Commit the changes to this repository
1. In WordPress Admin, press _Generate Static Files_ to export the website to the **quantumsense** repository with the Simply Static plugin
1. In the **quantumsense** repository, restore the deleted `docs/CNAME` file as follows:
   ```bash
   git restore docs/CNAME
   ```
   - This is necessary because the Simply Static export deletes all files in the output directory before exporting, including the `CNAME` file, which is used by GitHub Pages.
1. In the **quantumsense** repository, commit all changes and push to GitHub

### Notes

- Currently, Local expects the WordPress project to be at the following location:
    > `/Users/dw/Desktop/quantumsense-wordpress`
- The credentials for WordPress Admin are `admin`/`admin`
