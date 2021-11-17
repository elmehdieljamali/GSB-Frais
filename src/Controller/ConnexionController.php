<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Visiteur;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;


class ConnexionController extends AbstractController
{
    
    public function __construct(){
        $this->connexionOk = false;
    }

    public function index(Request $request, $echec): Response{
        if($echec == false){

            $this->seConnecter($request);
            if($this->connexionOk){
                return $this->render('connexion/index.html.twig', [
                    'controller_name' => 'ConnexionController',
                    'session' => $request->getSession(),
                ]);
            }
            else{
                return new RedirectResponse('/connexion/echec');
            }
        }

        else{
            $session = $request->getSession();
            return $this->render('accueil/index.html.twig', [
                'controller_name' => 'ConnexionController',
            ]);
        }
    }

    public function seConnecter(Request $request){
        $login = $request -> request -> get('login') ;
        $mdp = $request -> request -> get('mdp') ;
    
 
        try {
            $em = $this -> getDoctrine() -> getManager() ;
            $rpVisiteur = $em -> getRepository( Visiteur::class) ;
            $logVisiteur = $rpVisiteur -> findOneBy( array('login' => $login, 'mdp' => $mdp)) ;
            
            if( $logVisiteur ){
                $session = $request -> getSession();
                $session->set( 'login', $logVisiteur->getLogin() );
                $session->set( 'id', $logVisiteur->getId() );
                $session->set( 'nom', $logVisiteur->getNom() );
                $session->set( 'prenom', $logVisiteur->getPrenom() );
                $session->set( 'adresse', $logVisiteur->getAdresse() );
                $session->set( 'cp', $logVisiteur->getCp() );
                $session->set( 'ville', $logVisiteur->getVille() );
                $session->set( 'dateEmbauche', $logVisiteur->getDateEmbauche() );
                
                
                $this->connexionOk = true;
                return $session;
            }
        }
        
        catch( PDOException $e ){
            print_r($e) ;
        }
    }

}
?>