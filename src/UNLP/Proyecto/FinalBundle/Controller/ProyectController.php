<?php

namespace UNLP\Proyecto\FinalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;
use Symfony\Component\HttpFoundation\Session\Storage\Handler\PdoSessionHandler;

use UNLP\Proyecto\FinalBundle\Entity\Markers;

class ProyectController extends Controller
{
    public function parseToXML($htmlStr)
    {

        $xmlStr=str_replace('<','&lt;',$htmlStr);
        $xmlStr=str_replace('>','&gt;',$xmlStr);
        $xmlStr=str_replace('"','&quot;',$xmlStr);
        $xmlStr=str_replace("'",'&#39;',$xmlStr);
        $xmlStr=str_replace("&",'&amp;',$xmlStr);

        return $xmlStr;

    }

    public function getMarkersForProjectInXML($projectId)
    {
         $repository = $this->getDoctrine()->getRepository('FinalProyectoBundle:Markers');

         $markers = $repository->findBy(array('projectId' => $projectId));

         header("Content-type: text/xml");

         // Start XML file, echo parent node

         $result = '<?xml version="1.0" ?><markers>';

         // Iterate through the rows, printing XML nodes for each
         foreach ($markers as $marker) {

             // ADD TO XML DOCUMENT NODE
             $result = $result . '<marker ';
             $result = $result . 'name="' . self::parseToXML($marker->getName()) . '" ';
             $result = $result . 'address="' . self::parseToXML($marker->getAddress()) . '" ';
             $result = $result . 'lat="' . $marker->getLat() . '" ';
             $result = $result . 'lng="' . $marker->getLng() . '" ';
             $result = $result . 'type="' . $marker->getType() . '" ';
             $result = $result . '/>';

         }

         // End XML file
         $result = $result . '</markers>';

         return new Response($result,200,array('content-type' => 'text/xml'));
    }

    public function getProjectMarkersAction(Request $request)
    {

        $projectId = $request->request->get('projectId');

        return self::getMarkersForProjectInXML($projectId);

    }


    public function showMapAction(Request $request)
    {
        return $this->render('FinalProyectoBundle:Project:home.html.twig');
    }

    public function addProjectMarkerAction(Request $request)
    {

        $projectId = $request->request->get('projectId');
        $lat = $request->request->get('lat');
        $lng = $request->request->get('lng');
        $address = $request->request->get('address');
        $name = $request->request->get('name');
        $type = $request->request->get('type');

        $marker = new Markers();
        $marker->setName($name);
        $marker->setAddress($address);
        $marker->setLat($lat);
        $marker->setLng($lng);
        $marker->setType($type);
        $marker->setProjectId($projectId);

        $em = $this->getDoctrine()->getManager();
        $em->persist($marker);
        $em->flush();

        return self::getMarkersForProjectInXML($projectId);

    }

}
