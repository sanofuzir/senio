<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // _home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_home');
            }

            return array (  '_controller' => 'Senio\\CoreBundle\\Controller\\DefaultController::indexAction',  '_route' => '_home',);
        }

        if (0 === strpos($pathinfo, '/Questionnaire')) {
            // _add_questionnaire
            if ($pathinfo === '/Questionnaire/add') {
                return array (  'id' => NULL,  '_controller' => 'Senio\\CoreBundle\\Controller\\DefaultController::editQuestionnaireAction',  '_route' => '_add_questionnaire',);
            }

            // _edit_questionnaire
            if (0 === strpos($pathinfo, '/Questionnaire/edit') && preg_match('#^/Questionnaire/edit(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_edit_questionnaire')), array (  'id' => NULL,  '_controller' => 'Senio\\CoreBundle\\Controller\\DefaultController::editQuestionnaireAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
