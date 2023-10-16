# QuantumSense Website WordPress

WordPress project serving as the base for the [QuantumSense website](https://github.com/quantumsense-ai/quantumsense).

## Description

This repository contains a WordPress project which is used to develop the QuantumSense website hosted in the [quantumsense-ai/quantumsense](https://github.com/quantumsense-ai/quantumsense) repository.

The website is developed in WordPress and then the static files are exported with the [Simply Static](https://simplystatic.com/) WordPress plugin and added to the [quantumsense-ai/quantumsense](https://github.com/quantumsense-ai/quantumsense) repository.

This WordPress project is supposed to be used with [Local](https://localwp.com/).

## Instructions

>  The following assumes that the WordPress project is already set up in Local.

1. Configure the Simply Static plugin in WordPress Admin as follows:
   1. Set _Deployment > Deployment Method_ to _Local Directory_
   1. Set _Deployment > Local Directory > Path_ to a local clone of [quantumsense-ai/quantumsense](https://github.com/quantumsense-ai/quantumsense)
   1. Enable _Misc > Additional Settings > Clear Directory_
1. Make changes to the website through WordPress as usual
1. Before committing or exporting the website, restart WordPress in Local with _Right-click > Restart_
   - This is to ensure that all changes are written to disk
1. Commit the changes to the WordPress project to this repository
1. Export the website by clicking _Generate Static Files_ in the Simply Static Menu in WordPress Admin
   - This exports and writes the static website files to the local clone of the [quantumsense-ai/quantumsense](https://github.com/quantumsense-ai/quantumsense) repository (provided that the Simply Static plugin has been set up as described above)
1. Commit the changes to the [quantumsense-ai/quantumsense](https://github.com/quantumsense-ai/quantumsense) repository

### Notes

- Local expects the WordPress project to be at the following location:
    > `/Users/dw/Desktop/quantumsense-wordpress`
- The credentials for WordPress Admin are `admin`/`admin`
