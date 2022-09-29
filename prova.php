<?php
/*

//LEZIONE 1 / 2 = ESEMPIO PRATICO FORM

$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
echo "Ciao ".$nome." ".$cognome." - ";

*/

/*

//LEZIONE 3 / 4 = SINTASSI DI BASE, COMMENTI, VARIABILI E COSTANTI 

function saluta(){
    $nome = "Franco";
    $cognome = "Gioia";
    echo "Ciao ".$nome." ".$cognome." - ";
}
saluta();

define("INDIRIZZO","Via Achille - "); //define per costanti nelle funzioni
const INDIRIZZO2 = "Via Grandi - "; //define per costanti fuori dalle funzioni
echo INDIRIZZO;
echo INDIRIZZO2;

*/

/*

//LEZIONE 5 = TIPI DI DATI

$stringa = "variabile stringa";
$intero = 10;
$float = 10.05;
$booleano = true;
$array = ["questo","è un","array"];
$null;

class Persona
{
    public $first_name;
    public $last_name;

    public function __construct($first_name, $last_name)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }
}

$oggetto = new Persona("Nico","Didonna");

var_dump($float); //funzione che serve a vedere che tipo di dato è la variabile

*/

/*

//LEZIONE 6 = LAVORARE CON LE STRINGHE

$loren = "Lorem Ipsum is simply dummy text of the printing and typesetting industry";
$parola = "ciao";
strlen($loren); //lunghezza stringa
strtolower($loren); //string to lower case
strtoupper($loren); //string to upper case
trim($loren); //elimina spazi vuoti alla fine della stringa
strpos($loren, "simply"); //ti dice a che posizione è la parola cercata
substr($loren, 10, 5); //prende una parte di stringa selezionata da dove a dove
str_replace('dummy','ciao',$loren); //sostituisce una parola scelta con un'altra nella stringa inserita

*/

/*

//LEZIONE 7 = NUMERI, OPERATORI E MATEMATICA IN PHP

$operatore1 = 3;
$operatore2 = 5.10;
$operatore3 = '10';
$operatore4 = -2;

is_int($operatore1); //è intero? true o false come risposta;
is_float($operatore2); //è float? true o false come risposta;

$operatore1 + $operatore3; //sommando stringa + numero il risultato è un numero, al contrario di js che concatena la stringa

$operatore3 = (int)"10"; //casting da stringa a int
$operatore3 = (float)"10"; //casting da stringa a float
abs($operatore4); //trasforma numero tra parentesi in numero assoluto, quindi qui da -2 a 2

min(0, 20, 10, 40); //restituisce il più basso
max(0, 20, 10, 40); //restituisce il più alto
sqrt(25); //restituisce radice quadrata
round(0.51); //arrotonda per eccesso o difetto, qui darà 1
rand(0,10); //restituisce numero random nel range dato

$operatore1 + $operatore2; //semplice addizione
$operatore1 - $operatore2; //semplice sottrazione
$operatore1 * $operatore2; //semplice moltiplicazione
$operatore1 / $operatore2; //semplice divisione
$operatore1 ** $operatore; //elevazione (in questo caso 3 alla 3)
$operatore1 % $operatore2; //resto della divisione tra i due valori

$operatore1 += 5; //prende il numero della variabile e lo aumenta di 5 (si puo fare anche con sottrazione, moltiplicazione e divisione)
$operatore1++; //incremento di 1
$operatore1--; //decremento di 1

*/

/*

//LEZIONE 8 = ARRAY , ARRAY ASSOCIATIVI E ARRAY MULTIDIMENSIONALI


$citta = ["Milano","Roma","Napoli"]; //modo 1 per creare array
$citta2 = array("Milano","Roma","Napoli"); //modo 2 per creare array

for ($i=0; $i < count($citta); $i++) { 
    echo $citta[$i]." ";
}

count($citta); //lenght dell'array citta

$umano = [
    "nome" => "Nico",
    "cognome" => "Didonna",
    "eta" => 22
]; //array ossociativo : dai un nome all'indice (chiave => valore)

echo "<br>".$umano["nome"];
echo "<br>".$umano["cognome"];

foreach ($umano as $key => $value) {
    echo "<br>".$key." => ".$value;
}

$scuola = [
    ["1A","1B","1C"],
    ["2A","2B","2C"]
]; //array multidimensionale

$scuola[1][2]; //accedere ad un array multidimensionale, in questo caso 2C (prima entro nell'array con indice 1 e poi prendo indice 2)

for ($classi=0; $classi < count($scuola); $classi++) {
    echo "<br>"."Classi = ".$classi+1 . "°";
    for ($sezione=0; $sezione < count($scuola[$classi]); $sezione++) { 
        echo "<br>"."Sezioni = ".$scuola[$classi][$sezione];
    }
}

sort($citta); //ordina array ordine alfabetico
rsort($citta); //ordina array alfabeto al contrario

ksort($umano); //ordina chiave array associativo ordine alfabetico (key - sort)
krsort($umano); //ordina chiave array associativo ordine alfabetico al contrario (key - r - sort)
asort($umano); //ordina valore array associativo ordine alfabetico (a (sta per valore) - sort)
arsort($umano); //ordina valore array associativo ordine alfabetico al contrario (a (sta per valore) - r - sort)

array_push($citta, "Firenze"); //aggiunge elemento in coda all'array indicato
array_pop($citta); //toglie ultimo elemento all'array indicato
array_unshift($citta,"Monopoli"); //aggiunge elemento all'inizio dell'array indicato
array_shift($citta); //toglie primo elemento dall'array indicato

*/

/*

//LEZIONE 9 = CONDIZIONALI: IF ELSE , ELSE IF E SWITCH

$nomignolo = "Fabio";

if($nomignolo == "Fabio"){
    echo "Ciao Fabio";
} else {
    echo "Ciao persona sconosciuta";
} //semplice if

if($nomignolo == "Fabio"){
    echo "Ciao Fabio";
} else if ($nomignolo == "Luca"){
    echo "Ciao Luca";
} else {
    echo "Ciao persona sconosciuta";
} //semplice else if


// operatori di comparazione:
// == uguale
// > maggiore
// < minore
// >= maggiore o ugale
// <= minore o uguale 
// !== diverso
// === identico (stesso valore e stesso tipo di dato)
// !== diverso (diverso valore o diverso tipo di dato)

//operatori logici:
// AND &&
// OR ||
// NOT !

//sull'html puoi vedere come usare l'if nell'HTML stesso

switch ($nomignolo) {
    case 'Luca':
        "Ciao Luca!";
        break;
        
    case 'Franco':
        "Ciao Franco!";
        break;

    case 'Matteo':
        "Ciao Matteo!";
        break;

    default:
        "Ciao Sconosciuto!";
        break;
}//semplice switch

*/

/*

//LEZIONE 10 = LOOP: FOR, FOREACH, WHILE, DO WHILE
$associativo = [
    "nome"=>"Nico",
    "cognome"=>"Didonna",
    "eta"=>"22"
];
$semplice_array = [1,2,3,4];

for ($i=0; $i < 5; $i++) { 
    echo "<br>"."Il contatore segna il numero = ".$i;
}//semplice for che cicla 5 volte

foreach ($semplice_array as $value) {
   "Valore = ".$value;
}

foreach ($associativo as $key => $value) {
    "Nome chiave = ".$key." - Valore = ".$value;
}//semplice foreach con array associativo

$contatore = 0;
while ($contatore <= 5) {
    "Il numero sul contatore è = ".$contatore;
    $contatore++;
}//semplice while

$contatore1 = 0;
do {
    $contatore1++;
} while ($contatore1<= 2);


//break = ferma il codice ed esce dall blocco di codice in cui è inserito
//continue = salta il blocco di iterazione in cui è inserito

//sull'HTML puoi vedere come fare un loop sull'HTML stesso

*/

/*

//LEZIONE 11 = TUTTO SULLE FUNZIONI IN PHP

function saluta(){
    echo "Ciao Nico";
}//funzione semplice

saluta(); //chiamare una funzione

$numerino = 4;
function show_numerino(){
    $numerino = 10; //questa è una variabile che esiste solo nella funzione
    $GLOBALS['numerino'] = 2; //questa è una variabile modificata globalmente
}

function somma($valore1, $valore2){
    $somma = $valore1 + $valore2;
}//funzione con parametri
somma(10,20);//chiamare funzione con parametri

function somma2($valore1, $valore2 = 10){
    $somma = $valore1 + $valore2;
}//funzione con parametri di default (se non viene passato si prende 10 come default)


function somma3($valore1, $valore2){
    $somma = $valore1 + $valore2;
    return $somma; //ora il valore di ritorno può essere visto all'esterno della funzione
}
echo $somma3(5,3); //richiama funzione e mostra risultato che abbiamo fatto ritornare

*/

/*

//LEZIONE 12 = LAVORARE CON LE DATE IN PHP

$data = date('d-m-Y',0); //i parametri sono: formato della data e millisecondi passati dal 1 gennaio 1970 (chiamato timestamp)
echo $data;

$timestamp = time(); //la funzione time() ti ritorna il timestamp corrente ( millisecondi passati dall'1 gennaio 1970 al momento dell'esezuione)

$timestamp2 = mktime(14,49,00,02,12,2022); //mktime(ore,minuti,secondi,mese,giorno,anno) restituisce timestamp della data passata nei parametri

$timestamp3 = strtotime('23-09-2022 17:00:00'); //restituisce timestam della data passata nei parametri

*/

/*

//LEZIONE 13 = INCLUDERE FILE ESTERNI E PULIRE IL CODICE

function funzione_esterna(){
    echo "ECCO LA FUNZIONE PRESA DALL'ALTRO FILE";
} //nell'html abbiamo usato "require" per rendere utilizzabile questo file php nell'html

//con "include" (vedi in index.php), puoi includere nella tua pagina php dei file esterni (tipo l'html di header che ho inserito io)

//include_once o require_once serve per evitare che gli stessi file vengano importati più volte (se per caso si è scritto più volte il codice senza accorgersene)

*/

/*

//LEZIONE 14 = REGEX

*/

/*

//LEZIONE 15 = FORM , GET E POST

$marca_form = $_GET['marca'];
$modello_form = $_GET['modello'];

echo $marca_form;
echo $modello_form;

*/

//LEZIONE 16 = LEGGERE E SCRIVERE FILE IN PHP

/*

$nome_file = "note.txt";
$new_text = "frase aggiuntiva al txt";

if(file_exists($nome_file)) {
    $file = fopen($nome_file, "a+"); //fopen = file open
}else{
    echo "Il file non esiste";
}

$content = fread($file, "30"); //fread = file read, in questo caso legge i primi 30 caratteri del file
echo $content."<br>";

$content2 = file_get_contents($nome_file); //legge il file intero senza bisogno di aprirlo prima con fopen
echo $content2."<br>";

fwrite($file, $new_text); //file write, scrive sul file

fclose($file); //fclose = file close

//rename($nome_file, "nome_nuovo.txt"); //rinomina il nome del file
//unlink($nome_file); //elimina il file

*/

//LEZIONE 17 = GESTIRE LE CARTELLE

/*

$nome_cartella = "testCartella";
$nomeFile = "nuovaNota.txt";
$nuovoFile = $nome_cartella."/".$nomeFile;

if(!file_exists($nome_cartella)){ //verifica che la cartella non esista già
    if(mkdir($nome_cartella)){//crea cartella
        echo "Cartella creata con Successo"."<br>";
    }else{
        echo "Errore nella creazione della cartella"."<br>";
    }
}else{
    echo "La cartella esiste già"."<br>";
}

if(file_exists($nomeFile)){ //verifica che la cartella non esista già
    if(copy($nomeFile, $nuovoFile)){//copia il file inserito nel path deciso
        echo "File copiato con successo"."<br>";
    }else{
        echo "Errore nella copia del file"."<br>";
    }
}else{
    echo "Il file non esiste"."<br>";
}

function mostraFile($path){
    if(file_exists($path) && is_dir($path)){
        $result = scandir($path);

        $files = array_diff($result, array(".",".."));
        print_r($files);

        if(count($files) > 0){
            foreach($files as $file){
                if(is_file("$path/$file")){
                    echo $file."<br>";
                } else if(is_dir("$path/$file")){
                    mostraFile("$path/$file");
                }
            }
        } else{
            echo "Errore: Non sono stati trovati file in questa cartella";
        }
    }   else{
            echo "Errore: la cartella non esiste";
    }
}

mostraFile("extra");

$filess = glob("extra/*.txt");
foreach($filess as $file){
    echo basename($file)." (size: ".filesize($file)." bytes)"."<br>";
}

*/

//LEZIONE 18 = CARICARE FILE CON PHP

/*

if($_SERVER["REQUEST_METHOD"] == "POST"){
    IF(isset($_FILES["photo"]) && $_FILES['photo']['error'] == 0){
        $estensioni_permesse = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $nome_file = $_FILES['photo']['name'];
        $tipo_file = $_FILES['photo']['type'];
        $dimensione_file = $_FILES['photo']['size'];

        //Verifichiamo estensione del file
        $estensione = pathinfo($nome_file, PATHINFO_EXTENSION);
        if(!array_key_exists($estensione, $estensioni_permesse)) die("Errore: Seleziona un fomato valido");

        //Verifichiamo la grandezza massima di 5mb
        $dimensione_massima = 5*1024*1024;
        if($dimensione_file > $dimensione_massima) die("Errore: La grandezza è superiore al limite di 5mb");

        //Verifichiamo il tipo MIME
        if(in_array($tipo_file, $estensioni_permesse)){
            //Controlalre se il file esiste già
            if(file_exists("upload/".$nome_file)){
                echo $nome_file." esiste già";
            }else{
                move_uploaded_file($_FILES['photo']["tmp_name"],"upload/".$nome_file);
                echo "Il tuo file è stato caricato con successo";
            } 
        }   else {
                echo "Errore: C'è stato un problema con il caricamento del tuo file, riprova";
        }
            } else {
                echo "Errore: ".$_FILES['photo']['error'];
            }
        }
        
        
*/    
    
//LEZIONE 19 = COSA SONO I COOKIES

/*

setcookie("username", "Nico Didonna", time()+60*60*24*30); //salvare un coockie: setcookie(name,value,expire,domain,path,secure), gli ultimi tre possono essere lasciati di default

if(isset($_COOKIE['username'])){
    echo $_COOKIE['username'];
}else{
    echo "Nessun cookie disponibile";
}

setcookie("username", "", time()-3600); //per eliminare un cookie bisogna settarlo con un expire al passato 

*/

//LEZIONE 20 = CREARE ED USARE LE SESSIONI IN PHP

/*

session_start(); //cominciare una sessione

//salvare ed accedere ai dati della sessione
$_SESSION['user_id'] = 23;
echo $_SESSION['user_id'];

unset($_SESSION['user_id']); //rimuovere dati di una sessione

session_destroy(); //distruggere una sessione

*/

//LEZIONE 21 = INVIARE MAIL (c'è bisogno di installare un server SMTP)

/*

//mail solo testo
$to = "nico_didonna@yahoo.it";
$subject = "PHO MAIL TEST";
$message = "Email inviata da Nico tramite codice PHP";

if(mail($to, $subject, $message)){ //funzione per inviare la mail : mail(to, subject, message, headers, parameters)
    echo "La mail è stata inviata con successo";
}else{
    echo "Errore durante l'invio della mail";
}

//mail HTML
$to1 = "nico_didonna@yahoo.it";
$subject1 = "PHO MAIL TEST";
$from = "emailproveniente@gmail.com";
$headers = 'MIME-Version 1.0'."\r\n";
$headers .= "Content-type: text/html; charset=Iso-8859-1"."\r\n";
$headers .= "from: ".$from."\r\n";
$message = "<html><body>";
$message .= "<h1 style='color:blue;'>Titolo della nostra mail<h1>";
$message .= "</body></html>";

if(mail($to, $subject, $message, $headers)){ //funzione per inviare la mail : mail(to, subject, message, headers, parameters)
    echo "La mail è stata inviata con successo";
}else{
    echo "Errore durante l'invio della mail";
}

*/

//LEZIONE 22 = USARE JSON IN PHP

/*

$richiesta = $_POST["data"];
$strJsonFileContents = file_get_contents($richiesta.".json");
$array = json_decode($strJsonFileContents, true);
// echo '<pre>'. var_export($array, true).'</pre>';
echo json_encode($array);

*/

//LEZIONE 23-24 = PROGRAMMAZIONE ORIENTATA AD OGGETTI - LE CLASSI IN PHP

/*

//public = Si può accedere alla proprietà o al metodo da ovunque (default)
//protected = Si può accedere alla proprietà o al metodo solo dalla stessa classe o classi figlie
//private = Si può accedere alla proprietà o al metodo solo dalla stessa classe e basta

class Persona{
    //Proprietà
    public $nome;
    public $cognome;
    protected $eta;
    public $telefono;

    //Costruttore
    function __construct($nome, $cognome){
        $this->nome = $nome;
        $this->cognome = $cognome;
    }

    //Metodi
    function saluta(){
        echo "Ciao sono $this->nome $this->cognome"."<br>";
    }

    //Getters e Setters
    function get_eta(){
        return $this->eta;
    }

    function set_eta($eta){
        $this->eta = $eta;
    }
}

$persona1 = new Persona("Luigi","Didonna"); //creo istanza dell'oggetto persona
$persona1->nome = "Nico"; //modifico nome persona1
$persona1->set_eta(22); //modifico eta persona1 con setter
$persona1->saluta(); //richiamo metodo di persona1
var_dump($persona1); //mostro a schermo persona1
echo($persona1->get_eta()); //mostro a schermo eta di persona1 con getter

*/

//LEZIONE 25 = EREDITARIETA' DELLE CLASSI

/*

class Persona{
    public $nome;
    public $cognome;

    public function __construct($nome, $cognome){
        $this->nome = $nome;
        $this->cognome = $cognome;
    }

    public function saluta(){
        echo "Ciao, sono ".$this->nome." ".$this->cognome;
    }
}

class Insegnante extends Persona{
    public $materia;

    public function __construct($nome, $cognome, $materia){
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->materia = $materia;
    }

    public function saluta(){
        echo "Buongiorno, sono ".$this->nome." ".$this->cognome." ed insegno ".$this->materia;
    }
}

$insegnante1 = new Insegnante("Anna","Rossi","Italiano");
$insegnante1->saluta();

$persona1 = new Persona("Nico","Didonna");
$persona1->saluta();

*/

//LEZIONE 26 = LE CLASSI ASTRATTE

/*

abstract class Persona{
    public $nome;
    public $cognome;

    public function __construct($nome, $cognome){
        $this->nome = $nome;
        $this->cognome = $cognome;
    }

    abstract public function saluta(); //metodo abrstract che deve essere obbligatoriamente portato anche nelle sue classi figlie
}

class Insegnante extends Persona{
    public $materia;

    public function __construct($nome, $cognome, $materia){
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->materia = $materia;
    }

    public function saluta(){
        echo "Buongiorno, sono ".$this->nome." ".$this->cognome." ed insegno ".$this->materia;
    }
}

*/

//LEZIONE 27 = LE INTERFACCE IN PHP

/*

//Differenze tra classi astratte e interfacce
//-interfacce non hanno le proprietà
//-i metodi delle interfacce devono essere tutti pubblici
//-tutti i i metodi delle interfacce sono astratti quindi non serve la parola abstract
//-delle classi possono esterndere altre classi e implementare delle interfacce allo stesso tempo

interface entita{
    public function cade_a_terra();
}

abstract class Persona{
    public $nome;
    public $cognome;

    public function __construct($nome, $cognome){
        $this->nome = $nome;
        $this->cognome = $cognome;
    }

    abstract function saluta($nome, $cognome);
}

class Insegnante extends Persona implements entita{
    public $materia;

    public function __construct($nome, $cognome, $materia){
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->materia = $materia;
    }

    public function saluta($nome, $cognome, $materia = "Storia"){
        echo "Buongiorno, sono ".$this->nome." ".$this->cognome." ed insegno ".$this->materia;
    }

    public function cade_a_terra()
    {
        echo "TOOONFF!!!";   
    }
}

*/

//LEZIONE 28 = PROPRIETA' E METODI STATICI

/*

//-Sono elementi che possono essere chiamati direttamente senza creare un'istanza class:elemento
//-Si dichiarano con la parola static
//-Sono legati alla classe e non alle istanze

class Persona{
    static $conteggio = 0;
    public $nome;
    public $cognome;

    function __construct($nome, $cognome){
        $this->nome = $nome;
        $this->cognome = $cognome;
        Persona::$conteggio++;
    }

    static function prova(){
    }
}

echo Persona::$conteggio . "<br>";
$persona1 = new Persona("Luca","Rossi");
echo Persona::$conteggio . "<br>";
$persona1 = new Persona("Marco","Verdi");
echo Persona::$conteggio . "<br>";

*/

?>