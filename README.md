# typo3-standards

## Installation
In der Root composer des TYPO3-Projekts das Repository angeben:
~~~
   "repositories": [
        {
            "type": "path",
            "url": "local_packages/*"
        },
        {
            "type": "vcs",
            "url":  "https://github.com/berbach/bb-typo3-standards.git"
        }
    ],
~~~
und dann mit 
~~~
composer req bb/standards:v12.x-dev
~~~
installieren. Dies ist für TYPO3 v12.

## Features
### Image Crop
In Classes/Configuration/TCA/SocialMediaCrop.php kann die Crop-Konfiguration geholt werden.
### Traits
In Classes/Domain/Model/Trait liegen Traits für Slug und SocialMedia.
### TypeFilter
Mit Classes/Filter/TypeFilter.php kann man die ContentTypes konfigurieren.
### Slug
Classes/Service/SlugMaker.php erstellt Slug wie im TCA definiert
