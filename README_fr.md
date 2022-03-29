# ICEcoder pour YunoHost

[![Niveau d'intégration](https://dash.yunohost.org/integration/icecoder.svg)](https://dash.yunohost.org/appci/app/icecoder) ![](https://ci-apps.yunohost.org/ci/badges/icecoder.status.svg) ![](https://ci-apps.yunohost.org/ci/badges/icecoder.maintain.svg)  
[![Installer ICEcoder avec YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=icecoder)

*[Read this readme in english.](./README.md)*
*[Lire ce readme en français.](./README_fr.md)*

> *Ce package vous permet d'installer ICEcoder rapidement et simplement sur un serveur YunoHost.
Si vous n'avez pas YunoHost, regardez [ici](https://yunohost.org/#/install) pour savoir comment l'installer et en profiter.*

## Vue d'ensemble

Un éditeur de code dans votre navigateur.


**Version incluse :** 8.1~ynh1

**Démo :** http://demo.icecoder.net/ICEcoder/

## Avertissements / informations importantes

## Limitations

* Si le dossier actuel de l'éditeur se trouve là où se trouve l'éditeur, le dossier de l'éditeur est visible dans l'arbre des fichiers.

## Informations additionnelles

* Vous devrez configurer des éléments comme le mot de passe **directement** dans l'application.
* Si vous changez l'URL de cette application, vous ne changez pas l'URL réelle mais le chemin interne (le processus est le même que pour l'installation).

## Documentations et ressources

* Site officiel de l'app : https://icecoder.net
* Documentation officielle de l'admin : https://icecoder.net/manual
* Dépôt de code officiel de l'app : https://github.com/icecoder/ICEcoder
* Documentation YunoHost pour cette app : https://yunohost.org/app_icecoder
* Signaler un bug : https://github.com/YunoHost-Apps/icecoder_ynh/issues

## Informations pour les développeurs

Merci de faire vos pull request sur la [branche testing](https://github.com/YunoHost-Apps/icecoder_ynh/tree/testing).

Pour essayer la branche testing, procédez comme suit.
```
sudo yunohost app install https://github.com/YunoHost-Apps/icecoder_ynh/tree/testing --debug
ou
sudo yunohost app upgrade icecoder -u https://github.com/YunoHost-Apps/icecoder_ynh/tree/testing --debug
```

**Plus d'infos sur le packaging d'applications :** https://yunohost.org/packaging_apps