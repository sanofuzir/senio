<?php

namespace Senio\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Senio\CoreBundle\Entity\Questionnaire;
use Senio\CoreBundle\Models\QuestionnaireManager;
use Senio\CoreBundle\Form\QuestionnaireType;

class DefaultController extends Controller
{
    private $manager;

    /**
     * @return QuestionnaireManager
     */
    private function getQuestionnaireManager()
    {
        return $this->container->get('senio.questionnaire_manager');
    }
    
    /**
     * @Route("/", name="_home")
     * @Template()
     */
    public function indexAction()
    {
        $results = $this->getQuestionnaireManager()->getQuestionnaireResults();
        $num_of_votes = $this->getQuestionnaireManager()->getNumOfVotes();
        
        
        /** 
         * @var $highcharts \Gremo\HighchartsBundle\Highcharts 
         */
        $highcharts = $this->get('gremo_highcharts');
        
        $chart = $highcharts->newPieChart();
        
        return array('results' => $results,
                     'num_of_votes' => $num_of_votes,
                     'chart' => $chart,
                    );
        
    }
    
    /**
     * @Route("/Questionnaire/add", name="_add_questionnaire")
     * @Route("/Questionnaire/edit/{id}", name="_edit_questionnaire", requirements={"id" = "\d+"})
     * @Template()
     */
    public function editQuestionnaireAction(Request $request, $id = null)
    {
        if (is_null($id)) {
            $entity = $this->getQuestionnaireManager()->createQuestionnaire();
        } else {
            $entity = $this->getQuestionnaireAction($id);
        }

        $form  = $this->createForm(new QuestionnaireType(), $entity);

        if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {
                $this->getQuestionnaireManager()->saveQuestionnaire($entity);
                $this->get('session')->getFlashBag()->add('success', 'Vaš glas je bil uspešno shranjen!');
                return $this->redirect($this->generateUrl('_home'));
            }
        }

        return array(
            'form'   => $form->createView(),
            'questionnaire' => $entity,
        );
    }
    
}