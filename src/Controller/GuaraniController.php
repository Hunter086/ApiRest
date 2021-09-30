<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Routing\Annotation\Route;


class GuaraniController extends AbstractController
{
    private const  borrarProgresar= 'TRUNCATE TABLE int_progresar;';
    private const  ejecutarImportarDatos= 'Select importar_datos_alumnos();';
    private const  registroInfodelosalumnos= 'Select f_int_alumnos_plan_progresar';
    private const  generarArchivo= 'Select generar_archivos()';

    /**
     * 
     * @Route("/blog", name="blog_list", methods="GET")
     */
    public function guarani(): JsonResponse
    {

        return new JsonResponse(['status'=> 'Consult success'], Response::HTTP_CREATED);
    }
    /**
     * 
     * @Route("/borrarProgresar", name="borrar_Progresar", methods="GET")
     */
    public function borrarProgresar(Request $request)
    {
        try {
            $em = $this->getDoctrine()->getManager();

            $RAW_QUERY = $this->borrarProgresar;
        
            $statement = $em->getConnection()->prepare($RAW_QUERY);
            $statement->execute();
            $result = $statement->fetchAll();
            return new JsonResponse(['status'=> 'Consult success'], Response::HTTP_CREATED);
        } catch (\Throwable $th) {
            return new JsonResponse(['status'=> 'Consult Error'.$th], Response::HTTP_CREATED);
        }
        
    }
    /**
     * 
     * @Route("/ejecutarImportarDatos", name="ejecutar_Importar_Datos", methods="GET")
     */
    public function ejecutarImportarDatos(Request $request)
    {
        try {
            $em = $this->getDoctrine()->getManager();

            $RAW_QUERY = $this->ejecutarImportarDatos;
        
            $statement = $em->getConnection()->prepare($RAW_QUERY);
            $statement->execute();
            $result = $statement->fetchAll();
            return new JsonResponse(['status'=> 'Consult success'], Response::HTTP_CREATED);
        } catch (\Throwable $th) {
            return new JsonResponse(['status'=> 'Consult Error'.$th], Response::HTTP_CREATED);
        }
        
    }
    /**
     * 
     * @Route("/registroInfodelosalumnos/{anio}", name="registro_Info_delos_alumnos", methods="POST")
     */
    public function registroInfodelosalumnos(Request $request, $anio)
    {
        try {
            $em = $this->getDoctrine()->getManager();

            $RAW_QUERY = $this->registroInfodelosalumnos.'('.$anio.')';
        
            $statement = $em->getConnection()->prepare($RAW_QUERY);
            $statement->execute();
            $result = $statement->fetchAll();
            return new JsonResponse(['status'=> 'Consult success'], Response::HTTP_CREATED);
        } catch (\Throwable $th) {
            return new JsonResponse(['status'=> 'Consult Error'.$th], Response::HTTP_CREATED);
        }
        
    }
    /**
     * 
     * @Route("/generarArchivo", name="generar_Archivo", methods="POST")
     */
    public function generarArchivo(Request $request)
    {
        try {
            $em = $this->getDoctrine()->getManager();

            $RAW_QUERY = $this->generarArchivo;
        
            $statement = $em->getConnection()->prepare($RAW_QUERY);
            $statement->execute();
            $result = $statement->fetchAll();
            return new JsonResponse(['status'=> 'Consult success','response'=> $result], Response::HTTP_CREATED);
        } catch (\Throwable $th) {
            return new JsonResponse(['status'=> 'Consult Error'.$th], Response::HTTP_CREATED);
        }
        
    }

}
    
