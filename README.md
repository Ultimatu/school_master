# EXO

- Sujet 5:

 On souhaite réaliser une application pour gérer des masters. Un Master est caractérisé par un
nom et est dirigé par un enseignant. Un enseignant est identifié par un NUMEN (transmis par l'Éducation
Nationale) et est caractérisé par un nom et un prénom. Il peut se spécialiser en Professeur (ayant un titre
d'HDR) et Maître de conférences (ayant un titre de thèse). Un Professeur peut diriger un laboratoire.
Des cours sont dispensés dans un Master. Un Cours, caractérisé par un intitulé, est obligatoire pour un
Master donné et peut être optionnel dans un ou plusieurs Master

1. MCD:

```json
{
  "Master": {
    "nom": "string",
    "enseignant": {
      "NUMEN": "string",
      "nom": "string",
      "prenom": "string",
      "specialisation": {
        "titre": "string"
      },
      "laboratoire": {
        "nom": "string"
      }
    },
    "cours": {
      "intitule": "string",
      "obligatoire": "boolean",
      "optionnel": "boolean"
    }
  }
}
```


 
