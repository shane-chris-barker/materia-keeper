<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Materia;


class MateriaChecklistController extends AbstractController
{
    /**
     * @Route("/materia-checklist", name="materia_checklist")
     */
    public function index()
    {
		$materiaData 	= $this->getDoctrine()->getRepository(Materia::class)->findAll();
		// sort the materia into types
		foreach ($materiaData as $materia) {
			$name 		= $materia->getName();
			$type 		= $materia->getType();
			$locations 	= $materia->getMateriaLocations();
			$abilities 	= $materia->getMateriaAbilities();
			switch($type) {
				case('Support') :
					$supportMateria[$name]['name'] 		= $name;
					$supportMateria[$name]['locations'] = $locations;
					$supportMateria[$name]['abilities'] = $abilities;
					break;
				case('Magic') :
					$magicMateria[$name]['name'] 		= $name;
					$magicMateria[$name]['locations'] 	= $locations;
					$magicMateria[$name]['abilities'] 	= $abilities;
					break;
				case('Independent') :
					$independentMateria[$name]['name'] 		= $name;
					$independentMateria[$name]['locations'] = $locations;
					$independentMateria[$name]['abilities'] = $abilities;
					break;
				case('Summon') :
					$summonMateria[$name]['name'] 		= $name;
					$summonMateria[$name]['locations'] 	= $locations;
					$summonMateria[$name]['abilities'] 	= $abilities;

					break;
				case('Command') :
					$commandMateria[$name]['name'] 		= $name;
					$commandMateria[$name]['locations'] = $locations;
					$commandMateria[$name]['abilities'] = $abilities;
					break;

			}			
		}

        return $this->render('materia_checklist/index.html.twig', [
            'support' 		=> $supportMateria,
            'magic' 		=> $magicMateria,
            'independent' 	=> $independentMateria,
            'command'		=> $commandMateria,
            'summon'		=> $summonMateria
        ]);
    }
}
