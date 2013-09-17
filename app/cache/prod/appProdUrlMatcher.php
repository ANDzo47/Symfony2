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

        if (0 === strpos($pathinfo, '/proyecto')) {
            if (0 === strpos($pathinfo, '/proyecto/h')) {
                // final_proyecto_homepage
                if (0 === strpos($pathinfo, '/proyecto/hello') && preg_match('#^/proyecto/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'final_proyecto_homepage')), array (  '_controller' => 'UNLP\\Proyecto\\FinalBundle\\Controller\\DefaultController::indexAction',));
                }

                // final_proyecto_home
                if ($pathinfo === '/proyecto/home') {
                    return array (  '_controller' => 'UNLP\\Proyecto\\FinalBundle\\Controller\\DefaultController::homeAction',  '_route' => 'final_proyecto_home',);
                }

            }

            // final_proyecto_start_session
            if ($pathinfo === '/proyecto/startSession') {
                return array (  '_controller' => 'UNLP\\Proyecto\\FinalBundle\\Controller\\DefaultController::startSessionAction',  '_route' => 'final_proyecto_start_session',);
            }

            // final_proyecto_close_session
            if ($pathinfo === '/proyecto/closeSession') {
                return array (  '_controller' => 'UNLP\\Proyecto\\FinalBundle\\Controller\\DefaultController::closeSessionAction',  '_route' => 'final_proyecto_close_session',);
            }

            // final_proyecto_show_map
            if ($pathinfo === '/proyecto/showMap') {
                return array (  '_controller' => 'UNLP\\Proyecto\\FinalBundle\\Controller\\ProyectController::showMapAction',  '_route' => 'final_proyecto_show_map',);
            }

            // final_proyecto_get_markers
            if ($pathinfo === '/proyecto/getMarkers') {
                return array (  '_controller' => 'UNLP\\Proyecto\\FinalBundle\\Controller\\ProyectController::getProjectMarkersAction',  '_route' => 'final_proyecto_get_markers',);
            }

            // final_proyecto_add_marker
            if ($pathinfo === '/proyecto/addMarker') {
                return array (  '_controller' => 'UNLP\\Proyecto\\FinalBundle\\Controller\\ProyectController::addProjectMarkerAction',  '_route' => 'final_proyecto_add_marker',);
            }

        }

        if (0 === strpos($pathinfo, '/alimentos')) {
            // JAMAB_homepage
            if (rtrim($pathinfo, '/') === '/alimentos') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'JAMAB_homepage');
                }

                return array (  '_controller' => 'Jazzyweb\\AulasMentor\\AlimentosBundle\\Controller\\DefaultController::indexAction',  '_route' => 'JAMAB_homepage',);
            }

            // JAMAB_listar
            if ($pathinfo === '/alimentos/listar') {
                return array (  '_controller' => 'Jazzyweb\\AulasMentor\\AlimentosBundle\\Controller\\DefaultController::listarAction',  '_route' => 'JAMAB_listar',);
            }

            // JAMAB_insertar
            if ($pathinfo === '/alimentos/insertar') {
                return array (  '_controller' => 'Jazzyweb\\AulasMentor\\AlimentosBundle\\Controller\\DefaultController::insertarAction',  '_route' => 'JAMAB_insertar',);
            }

            // JAMAB_buscar
            if ($pathinfo === '/alimentos/buscar') {
                return array (  '_controller' => 'Jazzyweb\\AulasMentor\\AlimentosBundle\\Controller\\DefaultController::buscarPorNombreAction',  '_route' => 'JAMAB_buscar',);
            }

            // JAMAB_ver
            if (0 === strpos($pathinfo, '/alimentos/ver') && preg_match('#^/alimentos/ver/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'JAMAB_ver')), array (  '_controller' => 'Jazzyweb\\AulasMentor\\AlimentosBundle\\Controller\\DefaultController::verAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
