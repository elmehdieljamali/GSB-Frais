<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Entity\Visiteur;
use App\Entity\LigneFraisForfait;
use Symfony\Component\HttpFoundation\Request;

class CreerFicheController extends AbstractController
{
    
    public function index(Request $request): Response{

        return $this->render('creer_fiche/index.html.twig',[
        'controller_name' => 'CreerFicheController',]);
    }

    public function creerFiche(Request $request){
        $mois = $request -> request -> get('mois')
        $repas = $request -> request -> get('repas') ;
        $nuit = $request -> request -> get('nuit') ;
        $etape = $request -> request -> get('etape') ;
        $km = $request -> request -> get('km') ;

        try {
            $em = $this -> getDoctrine() -> getManager() ;
            $rpVisiteur = $em -> getRepository( Visiteur::class) ;
            $rpLigneFraisForfait = $em -> getRepository( LigneFraisForfait::class) ;
            $logLigneFraisForfait = $rpLigneFraisForfait -> findOneBy( array('login' => $login, 'mdp' => $mdp)) ;
            
            if( $logLigneFraisForfait ){
                $qb->insert('LigneFraisHorsForfait', 'momc')
                ->setParameter(0, $logVisiteur->getId())
                ->setparameter(1, $mois)
                ->setParameter(2, "REP")
                ->setparameter(3, $repas)
            }

            if( $logLigneFraisForfait ){
                $qb->insert('LigneFraisHorsForfait', 'momc')
                ->setParameter(0, $logVisiteur->getId())
                ->setparameter(1, $mois)
                ->setParameter(2, "NUI")
                ->setparameter(3, $nuit)
            }

            if( $logLigneFraisForfait ){
                $qb->insert('LigneFraisHorsForfait', 'momc')
                ->setParameter(0, $logVisiteur->getId())
                ->setparameter(1, $mois)
                ->setParameter(2, "ETP")
                ->setparameter(3, $etape)
            }

            if( $logLigneFraisForfait ){
                $qb->insert('LigneFraisHorsForfait', 'momc')
                ->setParameter(0, $logVisiteur->getId())
                ->setparameter(1, $mois)
                ->setParameter(2, "KM")
                ->setparameter(3, $km)
            }
        }
        
        catch( PDOException $e ){
            print_r($e) ;
        }
    }
}
