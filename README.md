# php-demarrage

Pour disposer d'un environnement standard sur un ordinateur équipé de docker:
* php (version recente)
* composer, phpunit
* * dossier tests pour écrire les tests unitaires avec phpunit
* * dossier src pour écrire le code source
* codecheck pour imposer le typage en PHP, la vérification de la syntaxe et le passage des tests

# Installation

```bash
git clone git@gitlab.com:logipro/dojo/kata/php-demarrage.git
cd php-demarrage
bin/composer install
```

# Lancement

Les tests unitaires
```bash
bin/phpunit
```

Vérifications du typage, de la syntaxe, du passage des tests unitaires.

```bash
./codecheck
```

# Autre chose ?

Appel direct au langage, par exemple la version utilisée
```bash
bin/php --version
```

Appel à divers outils de vérification de la qualité
```bash
bin/qa
```
