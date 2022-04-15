# GSB-Frais
Application d’enregistrement des frais engagés et de suivi des remboursements
## Contexte
Le laboratoire Galaxy Swiss Bourdin (GSB) est issu de la fusion entre le géant américain Galaxy (spécialisé dans le secteur des maladies virales dont le SIDA et les hépatites) et le conglomérat européen Swiss Bourdin (travaillant sur des médicaments plus conventionnels).  
L'application permet aux visiteurs médicaux d'enregistrer leurs dépenses dans le cadre de leurs visites aux praticiens et de pouvoir les consulter, modifier et/ou les supprimer tant qu'ils n'ont pas été validés par les comptables.
- [Contexte](https://github.com/elmehdieljamali/GSB-Frais/blob/main/01-GSB-Contexte.pdf)  

![index](https://user-images.githubusercontent.com/85114414/162618326-2e40b81f-0cff-4dbb-bd60-739cf37fb76d.jpg)
## Technologies / Logiciels
- Système d’exploitation : Linux (Debian 10)
- Framework : Symfony 5
- Langages : PHP, Twig, HTML, CSS
- ORM : Doctrine 2
- SGBDR : MySQL/MariaDB
- Serveur web : Apache 2
- IDE : Visual Studio Code
- Versioning : Git
- Gestionnaire des dépendances : Composer
## Description des cas d'utilisation
**Se connecter**
| **Nom du cas d'utilisation :** Se connecter |
|:----------|
| **Acteur déclencheur :** Visiteur médical |
| **Pré-conditions :** néant |
| **Post-conditions :** L'utilisateur est reconnu visiteur médical |
| **Scénario nominal :** |
| 1- Le système affiche un formulaire de connexion |
| 2- L'utilisateur saisit son login et son mot de passe et valide |
| 3- Le système contrôle les informations de connexion, informe que le profil Visiteur est activé, et maintenant affichée l'identité du visiteur médical connecté. |
| **Exceptions :** |
| 3-a : le nom et/ou le mot de passe n'est pas valide |
| 3-a.1 Le système en informe l'utilisateur ; retour à l'étape 1 |
| 4- L'utilisateur demande à se déconnecter |
| 5- Le système déconnecte l'utilisateur |
