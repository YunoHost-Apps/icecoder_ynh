# ICEcoder pour YunoHost

[![Niveau d'intégration](https://dash.yunohost.org/integration/icecoder.svg)](https://dash.yunohost.org/appci/app/icecoder) ![](https://ci-apps.yunohost.org/ci/badges/icecoder.status.svg) ![](https://ci-apps.yunohost.org/ci/badges/icecoder.maintain.svg)  
[![Installer ICEcoder avec YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=icecoder)

*[Read this readme in english.](./README.md)* 

> *Ce package vous permet d'installer ICEcoder rapidement et simplement sur un serveur YunoHost.  
Si vous n'avez pas YunoHost, consultez [le guide](https://yunohost.org/#/install) pour apprendre comment l'installer.*

## Vue d'ensemble
Un éditeur de code dans votre navigateur.

**Version incluse :** 8.0

## Démo

* http://demo.icecoder.net/ICEcoder/

## Configuration

Comment configurer cette app: Depuis l'écran des options d'ICEcoder

## Documentation

 * Documentation officielle: https://icecoder.net/manual
 * Documentation YunoHost : Si une documentation spécifique est nécessaire, n'hésitez pas à contribuer.

## Caractéristiques spécifiques YunoHost

#### Support multi-utilisateurs

* L'authentification LDAP et HTTP est-elle prise en charge ? Non.
* L'application peut-elle être utilisée par plusieurs utilisateurs ? Non (c'est interne à l'app).

#### Architectures supportées

* x86-64 - [![Build Status](https://ci-apps.yunohost.org/ci/logs/icecoder%20%28Apps%29.svg)](https://ci-apps.yunohost.org/ci/apps/icecoder/)
* ARMv8-A - [![Build Status](https://ci-apps-arm.yunohost.org/ci/logs/icecoder%20%28Apps%29.svg)](https://ci-apps-arm.yunohost.org/ci/apps/icecoder/)

## Limitations

* Si le dossier actuel de l'éditeur se trouve là où se trouve l'éditeur, le dossier de l'éditeur est visible dans l'arbre des fichiers.

## Informations additionnelles

* Vous devrez définir vous-même le chemin vers le site web que vous voulez éditer.
* Vous devrez configurer d'autres éléments comme le mot de passe **directement** dans l'application.

## Liens

 * Signaler un bug : https://github.com/YunoHost-Apps/icecoder_ynh/issues
 * Site de l'application : https://icecoder.net
 * Dépôt de l'application principale : https://github.com/icecoder/ICEcoder
 * Site web YunoHost : https://yunohost.org/

---

## Informations pour les développeurs

Merci de faire vos pull request sur la [branche testing](https://github.com/YunoHost-Apps/icecoder_ynh/tree/testing).

Pour essayer la branche testing, procédez comme suit.
```
sudo yunohost app install https://github.com/YunoHost-Apps/icecoder_ynh/tree/testing --debug
ou
sudo yunohost app upgrade icecoder -u https://github.com/YunoHost-Apps/icecoder_ynh/tree/testing --debug
```
