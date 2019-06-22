<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;


use App\Entity\Materia;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(Request $request)
    {
    	$form = $this->buildForm();

    	$form->handleRequest($request);

    	if($form->isSubmitted()) {
    		$data = $form->getData();
    		$materiaData = $this->getDoctrine()->getRepository(Materia::class)->findOneBy(['name' => $data->getName()]);
    	}

    
        return $this->render('home/index.html.twig', 
        	[
        		'form' => $form->createView(),
        		'materia' => isset($materiaData) ? $materiaData : false
        	]);
    }


    private function buildForm()
    {
    	$eMateria 		= new Materia();
		$materia 		= $this->getDoctrine()->getRepository(Materia::class)->getNamesAndTypes();

		foreach ($materia as $sort) {
			$formChoices[$sort['type']][$sort['name']] = $sort['name'];
		}
var_dump($formChoices['Command']);
		$form = $this->createFormBuilder($eMateria)
    	->add('name', ChoiceType::class, 
    		[
    			'choices' => [
    				'Please Select'	=> null,
    				'Command' 		=> $formChoices['Command'],
					'Independent'	=> $formChoices['Independent'],
					'Magic'			=> $formChoices['Magic'],
    				'Summon' 		=> $formChoices['Summon'],
    				'Support' 		=> $formChoices['Support'],
    			],
    			'label' 	=> 'Materia Name',
    			'required' 	=> true,
    			'attr'  	=> ['class' => 'form-control']
    		]
    	)->add('submit', SubmitType::class, ['label' => 'Search', 'attr' => ['class' => 'btn btn-primary mt-2']])
    	->getForm();

    	return $form;

    }
}
