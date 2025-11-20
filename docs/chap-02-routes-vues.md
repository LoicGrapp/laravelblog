# Chapitre 2 – Routes de base et premières vues Blade

Ce document fait partie de l’atelier **“Créer un blog avec Laravel”**.  
Dans ce chapitre, nous allons remplacer la page Laravel par défaut par **notre propre page d’accueil**, en utilisant :

- un contrôleur (`ExampleController`) ;
- une route propre (`/`) ;
- des vues Blade (`header`, `footer`, `homepage`).

L’objectif est d’avoir une application qui affiche déjà “quelque chose à nous” au lieu de la page par défaut de Laravel.

---

## 1. Objectifs pédagogiques

À la fin de ce chapitre, tu seras capable de :

1. Créer un contrôleur avec `php artisan make:controller`.
2. Définir une route qui appelle une méthode de contrôleur.
3. Créer des vues Blade et les inclure avec `@include`.
4. Structurer une page avec un header, un contenu central et un footer.
5. Versionner cette étape avec Git et la pousser sur GitHub, avec un tag de chapitre.

---

## 2. Point de départ

Ce chapitre part du principe que tu as terminé le **Chapitre 1** :

- Le projet Laravel `laravelblog` fonctionne en local.
- La base de données est configurée (`.env`).
- Les migrations de base ont été exécutées.
- Git est initialisé et le premier commit est fait.
- Le repo est connecté à GitHub (tag `chap-01-install`).

Si besoin, tu peux revenir à cet état avec :

```bash
git checkout chap-01-install
