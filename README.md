# NG1-2025 Sous-thème d'exemple

Ce dépôt contient un exemple de sous-thème WordPress basé sur le thème parent NG1-2025. Il démontre comment étendre et personnaliser le thème parent tout en conservant sa structure et ses fonctionnalités de base.

## À propos

Ce sous-thème est conçu pour servir d'exemple et de point de départ pour créer vos propres sous-thèmes basés sur NG1-2025. Il illustre les meilleures pratiques pour personnaliser un thème WordPress moderne utilisant l'édition de site complet (FSE).

## Caractéristiques

- Hérite de toutes les fonctionnalités du thème parent NG1-2025
- Personnalisation des couleurs via des fichiers JSON
- Patterns personnalisés et remplacements de patterns existants
- Templates de page personnalisés
- Structure optimisée pour l'extension et la personnalisation

## Structure du sous-thème

```
ng1-2025-subtheme-sample/
├── assets/                  # Ressources statiques (images, polices, etc.)
├── parts/                   # Parties de template personnalisées
├── patterns/                # Patterns de blocs personnalisés
│   ├── footer.php           # Remplacement du footer du thème parent
│   ├── parts-header-top.php # Personnalisation de l'en-tête
│   ├── section-banner-2.php # Nouveau pattern de bannière
│   ├── template-page-mon-blue.php    # Template de page personnalisé
│   └── template-page-overrides.php   # Exemple de remplacement de template
├── patterns_json/           # Définitions JSON des patterns
├── styles/                  # Styles personnalisés
│   ├── colors/              # Palettes de couleurs personnalisées
│   │   └── my-theme.json    # Définition des couleurs du sous-thème
│   └── sections/            # Styles de sections personnalisés
├── screenshot.png           # Aperçu du thème
├── style.css                # Feuille de style principale et métadonnées du thème
└── theme.json               # Configuration du thème (hérite du thème parent)
```

## Comment utiliser ce sous-thème

1. Assurez-vous que le thème parent NG1-2025 est installé dans votre WordPress
2. Installez ce sous-thème comme n'importe quel thème WordPress
3. Activez le sous-thème depuis le tableau de bord WordPress

## Personnalisation

### Couleurs

Vous pouvez personnaliser les couleurs en modifiant le fichier `styles/colors/my-theme.json`. Ce fichier définit la palette de couleurs utilisée par le sous-thème.

### Patterns

Pour ajouter ou remplacer des patterns :
1. Créez un nouveau fichier PHP dans le dossier `patterns/`
2. Définissez le pattern en utilisant le format standard de WordPress
3. Les patterns du sous-thème remplaceront automatiquement ceux du thème parent avec le même nom

### Templates

Les templates personnalisés sont disponibles dans le dossier `patterns/`. Vous pouvez les utiliser comme base pour créer vos propres templates de page.

## Développement

Pour développer ce sous-thème :

1. Clonez ce dépôt dans le dossier `wp-content/themes/` de votre installation WordPress
2. Effectuez vos modifications
3. Testez les modifications dans un environnement de développement

## Compatibilité

- WordPress 6.7+
- Thème parent NG1-2025 v1.1.0+
- PHP 5.7+

## Licence

Ce sous-thème est distribué sous la licence GNU General Public License v2 ou ultérieure, tout comme WordPress.
