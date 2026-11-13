###partie0:
1- $v1 et $v2 n'ont pas la meme valeur de marque car lors de la creation des deux objets chacun a sa propre valeur.

###partie1:
##Programme de test
echo $p->getName() . PHP_EOL; affiche Sara Hachimi

### Expérimentation

Erreur afficher pour "echo $p->cin;":
Fatal error: Uncaught Error: Cannot access private property Personne::$cin in C:\Users\SOUFIANE\Desktop\S3\Web\tp4_php\TP4-PHP-FATIMAZAHRA-BENHAYDA\tp_POO\partie1.php:50 Stack trace: #0 {main} thrown in C:\Users\SOUFIANE\Desktop\S3\Web\tp4_php\TP4-PHP-FATIMAZAHRA-BENHAYDA\tp_POO\partie1.php on line 50

Erreur afficher pour "echo $p->dateNaissance":
Fatal error: Uncaught Error: Cannot access private property Personne::$dateNaissance in C:\Users\SOUFIANE\Desktop\S3\Web\tp4_php\TP4-PHP-FATIMAZAHRA-BENHAYDA\tp_POO\partie1.php:51 Stack trace: #0 {main} thrown in C:\Users\SOUFIANE\Desktop\S3\Web\tp4_php\TP4-PHP-FATIMAZAHRA-BENHAYDA\tp_POO\partie1.php on line 51

Erreur afficher pour "echo $p->getAge();":
Fatal error: Uncaught Error: Call to private method Personne::getAge() from global scope in C:\Users\SOUFIANE\Desktop\S3\Web\tp4_php\TP4-PHP-FATIMAZAHRA-BENHAYDA\tp_POO\partie1.php:52 Stack trace: #0 {main} thrown in C:\Users\SOUFIANE\Desktop\S3\Web\tp4_php\TP4-PHP-FATIMAZAHRA-BENHAYDA\tp_POO\partie1.php on line 52

### Questions
1.1 je remarque que les trois instructions provoque une erreur :
 line 50 ==> l'erreur est dù au accee directe depuis l'exterieur au propriété privé cin 
 line 51 ==>de meme l'erreur est dù au accee directe depuis l'exterieur au propriété privé dateNaissance
 line 52 ==>la methode getAge() est privé c'est pour l'erreur est affiché lorsqu'on a y accéder depuis l'exterieur
 
 1.2  il est  dangereux de laisser cin en public car il va être accessible partout 

 1.3 la methode getAge() est utile dans la classe où elle est définit , on l'utilise dans une autre methode en fesant juste un appelle a cette methode getAge().

1.4 lorsqu'on change la visibilité de cin au protected elle devient accéssible depuis les classes filles seulement et pas dans le scripte principale

###Partie2:
2.1.a 
-"new Voiture("Noire")" peremt de créer un objet de couleur noire et de vitesse par défaut égale  à 0
-"`new Voiture(120)" permet de créer un objet de couleur 120 qui'est transformer en string malgré qu'elle est entré comme entier,et pour la vitesse prend la valeur par défaut 0

2.1.b l' avantage de cette écriture est que il simplifier le code 

2.2.a dans l'execution une erreur est affiché car on ne peut pas déclaré 2 instructeur dans la meme classe.
2.2.b la solution est d'initialiser les parametres dans le constructeur avec des chaines vides

 2.3.a l'affichage se fait suivant l'ordre des instruction ; c-à-d :
 Voiture Blanche créée
 Voiture Blanche  détruite.
 Fin du script.
 
 2.3.b l'affichage se fait sous la forme suivante :
 Voiture Blanche créée.
Fin du script.
Voiture Blanche détruite.
ce changement est car lorsque l'objet est créer sa création s'affiche puis fin de script sera affiché et ensuite l'objet se détruit puis sa déstruction sera affiché.

2.3.c il detruit dans l' ordre inverse  de leur  création c-à-d si on a creer tout dabort $a puis $b ,la premiére qui sera détruit est $b puis $a.

