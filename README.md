# QuantumSense Website WordPress

WordPress project serving as the base for the [QuantumSense website](https://github.com/quantumsense-ai/quantumsense).

## Description

This repository contains a WordPress project which is used to develop the QuantumSense website.

WordPress is only used for editing the website. After making changes, the website is exported as a static website to the [quantumsense-ai/quantumsense](https://github.com/quantumsense-ai/quantumsense) repository and served with GitHub Pages

Exporting the website is done with the [Simply Static](https://simplystatic.com/) WordPress plugin (see instructions below). The WordPress project itself is supposed to be used locally with [Local](https://localwp.com/).

## Instructions

>  The following assumes that the WordPress project is already set up on the local machine with [Local](https://localwp.com/).

1. Make sure you have a local clone of the [quantumsense-ai/quantumsense](https://github.com/quantumsense-ai/quantumsense) repository
1. In WordPress Admin, make sure the Simply Static plugin is configured as follows:
   1. Set _Deployment > Deployment Method_ to _Local Directory_
   1. Set _Deployment > Local Directory > Path_ to the `docs/` directory in the local [quantumsense-ai/quantumsense](https://github.com/quantumsense-ai/quantumsense) repository
   1. Enable _Misc > Additional Settings > Clear Directory_
1. Edit the website through WordPress as usual
1. After making changes, restart the WordPress instance by _Right-click > Restart_ in Local
   - This is to ensure that all changes are written to disk
1. Commit the changes to this repository
1. Export the website to the quantumsense-ai/quantumsense repository by pressing _Generate Static Files_ in WordPress Admin
1. Restore the deleted `CNAME` file in the `docs/` directory of the quantumsense-ai/quantumsense repository: `git restore docs/CNAME`
   - The `CNAME` file (which is required for for GitHub Pages) in the output directory gets deleted by the _Clear Directory_ option of the Simply Static plugin and thus must be restored
1. Commit the changes to the quantumsense-ai/quantumsense repository

### Notes

- Currently, Local expects the WordPress project to be at the following location:
    > `/Users/dw/Desktop/quantumsense-wordpress`
- The credentials for WordPress Admin are `admin`/`admin`
