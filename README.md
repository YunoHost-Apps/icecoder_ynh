# ICEcoder

[![Integration level](https://dash.yunohost.org/integration/icecoder.svg)](https://dash.yunohost.org/appci/app/icecoder) ![](https://ci-apps.yunohost.org/ci/badges/icecoder.status.svg) ![](https://ci-apps.yunohost.org/ci/badges/icecoder.maintain.svg)  
[![Install ICEcoder with YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=icecoder)

*[Lire ce readme en français.](./README_fr.md)*

> *This package allows you to install ICEcoder quickly and simply on a YunoHost server.  
If you don't have YunoHost, please consult [the guide](https://yunohost.org/#/install) to learn how to install it.*

## Overview
A code editor in your browser.

**Shipped version:** 8.0

## Demo

http://demo.icecoder.net/ICEcoder/

## Configuration

How to configure this app: From ICEcoder options screen.

## Documentation

 * Official documentation: https://icecoder.net/manual
 * YunoHost documentation: If specific documentation is needed, feel free to contribute.

## YunoHost specific features

#### Multi-user support

Are LDAP and HTTP auth supported? No.
Can the app be used by multiple users? Yes (It is internal to the app).

#### Supported architectures

* x86-64 - [![Build Status](https://ci-apps.yunohost.org/ci/logs/icecoder%20%28Apps%29.svg)](https://ci-apps.yunohost.org/ci/apps/icecoder/)
* ARMv8-A - [![Build Status](https://ci-apps-arm.yunohost.org/ci/logs/icecoder%20%28Apps%29.svg)](https://ci-apps-arm.yunohost.org/ci/apps/icecoder/)

## Limitations

* If the editor's current folder is where the editor is, the editor's folder is visible in the file tree.

## Additional information

* You will need to set youself the path to the website who you want edit.
* You will need to configure others things like password **directly** in the app.
* You will **REALLY NEED** to make the installation path is in the root (yes, but you can't with other solution!)!

## Links

 * Report a bug: https://github.com/YunoHost-Apps/icecoder_ynh/issues
 * App website: https://icecoder.net/
 * Upstream app repository: https://github.com/icecoder/ICEcoder
 * YunoHost website: https://yunohost.org/

---

## Developer info

**Only if you want to use a testing branch for coding, instead of merging directly into master.**
Please send your pull request to the [testing branch](https://github.com/YunoHost-Apps/icecoder_ynh/tree/testing).

To try the testing branch, please proceed like that.
```
sudo yunohost app install https://github.com/YunoHost-Apps/icecoder_ynh/tree/testing --debug
or
sudo yunohost app upgrade icecoder -u https://github.com/YunoHost-Apps/icecoder_ynh/tree/testing --debug
```
