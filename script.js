alert("Hello world");
alert("Veuillez saisir vos informations");

var nom = prompt("Saisir votre nom");
var prenom = prompt("Saisir votre prénom");
var annee_naissance = prompt("Saisir votre année de naissance");

// Correction ici : il faut utiliser `Number()` (avec une majuscule)
var age = Number(prompt("Saisir votre âge"));

var resultat = nom + " " + prenom + " (" + annee_naissance + "), âge : " + age;
alert(resultat);

// Correction de la syntaxe du if
if (age >= 18) {
  alert("Je suis majeur");
  alert("Bienvenue sur ma page");
} else {
  alert("Je suis mineur");
  alert("vous n'etes pas la bienvenue sur ma page");
}

