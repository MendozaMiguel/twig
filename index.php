<?php

require_once '/vendor/autoload.php';
require 'MonExtension.php';


//routing
$page='home';
if(isset($_GET['p'])){
  $page=$_GET['p'];
}

//recup via bdd
// class PdoHotel{
//     private static $serveur='mysql:host=localhost';
//     private static $bdd='dbname=hotel';   		
//     private static $user='root' ;    		
//     private static $mdp='root' ;	
// 		private static $monPdo;
//     private static $monPdoHotel = null;
    

// /**
//  * Constructeur privé, crée l'instance de PDO qui sera sollicitée
//  * pour toutes les méthodes de la classe
//  */				
// 	private function __construct()
// 	{
//     		PdoHotel::$monPdo = new PDO(PdoHotel::$serveur.';'.PdoHotel::$bdd, PdoHotel::$user, PdoHotel::$mdp); 
// 			PdoHotel::$monPdo->query("SET CHARACTER SET utf8");
// 	}
// 	public function _destruct(){
// 		PdoHotel::$monPdo = null;
//   }
  
//   	public  static function getPdoHotel()
// 	{
// 		if(PdoHotel::$monPdoHotel == null)
// 		{
// 			PdoHotel::$monPdoHotel= new PdoHotel();
// 		}
// 		return PdoHotel::$monPdoHotel;  
//   }
  
//   	function getLesChambres()
// 	{
// 		$req = "select * from chambre";
// 		$res = PdoHotel::$monPdo->query($req);
// 		$chambres = $res->fetchAll();
// 		return $chambres;
//   }
// }


function getChambres(){
  $pdo = new PDO('mysql:dbname=hotel;host=localhost','root','root');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
  $chambres = $pdo->query('SELECT * FROM chambre ORDER BY id DESC LIMIT 10');
  return $chambres;
}

//render template
$loader = new Twig_Loader_Filesystem(__DIR__. '/templates');
$twig = new Twig_Environment($loader,[
  'cache' => false, // __DIR__. '/tmp'
  'debug' => true,
]);

// $twig-> addFunction(new Twig_SimpleFunction('markdown', function($value){
//   return \Michelf\MarkdownExtra::defaultTransform($value);
// }, ['is_safe' => ['html']]));

// $twig -> addFilter(new Twig_SimpleFilter('markdown', function($value){
//   return \Michelf\MarkdownExtra::defaultTransform($value);
// }, ['is_safe' => ['html']]));

$twig->addExtension(new MonExtension());

$twig->addExtension(new Twig_Extensions_Extension_Text());

$twig->addExtension(new Twig_Extension_Debug());

$twig->addGlobal('current_page', $page);


switch ($page) {
  case 'contact':
    echo $twig->render('contact.twig', ['name'=>'Marc', 'email'=>'test@test.fr']);
    break;
  case 'home':
    echo $twig->render('home.twig', ['chambres' => getChambres()]);
    break;
  case 'test':
    echo $twig->render('01-atoms/link-nav/link.twig');
    break;
  case 'test2':
    echo $twig->render('05-pages/chambres.twig');
    break;
  default:
    header('HTTP/1.0 404 NOT FOUND');
    echo $twig->render('404.twig');
    break;
}
?>