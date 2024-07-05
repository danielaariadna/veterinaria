<?php
//CONTROLA LAS VISTAS DEL MENU
namespace App\Controllers;
use App\Models\amoModel;
use App\Models\mascotaModel;
use App\Models\adopcionModel;

class adopcionController extends BaseController
{
  
    //### ADOPCIONES ##########################################
    public function altaAdopcion()
    {return view('adopciones/altaAdopcion');}

    public function bajaAdopcion()
    {return view('adopciones/bajaAdopcion');}

    public function cargarAdopcion(){
        $amo = new amoModel();
        $mascota = new mascotaModel();
        $dataAmo = [
            'dni' => $this->request->getVar('dni'),
        ];
        $dataMascota = [
            'nro_registro' => $this->request->getVar('registro'),
        ];
        $existingAmo = $amo->existingAmo($dataAmo['dni']);
        $existingMascota = $mascota->existingMascota($dataMascota['nro_registro']);
        if ($existingAmo && $existingMascota) {
            $adopcionModel = new adopcionModel();
    
            $dataAdopcion = [
                'id_amo' => $existingAmo['id'],
                'id_mascota' => $existingMascota['id'],
                'fecha_inicio' => $this->request->getVar('fecha-alta'),
            ];

            $result = $adopcionModel -> insertar($dataAdopcion);
    
            if ($result ==1) {
                // Inserción exitosa
                return redirect()->back()->with('success', '¡La adopción ha sido registrada con éxito!');
            } else {
                // Error en la inserción de la adopción
                return redirect()->back()->withInput()->with('error', 'Error al registrar la adopción.');
            }
        } else {
            return redirect()->back()->withInput()->with('error', 'El adoptante o la mascota no se encuentran cargados en el sistema.');
        }

    }

    public function nuevaBaja(){
        $fecha_fin = "";
        $motivo="";
        $id=0;
        $adopcionModel = new adopcionModel();
        $amo = new amoModel();
        $mascota = new mascotaModel();
        $dataAmo = [
            'dni' => $this->request->getVar('dni'),
        ];
        $dataMascota = [
            'nro_registro' => $this->request->getVar('registro'),
            'fecha_defuncion' => ""
        ];
        
        $existingAmo = $amo->existingAmo($dataAmo['dni']);

        $existingMascota = $mascota->existingMascota($dataMascota['nro_registro']);

        if($existingAmo && $existingMascota){
        $existingAdopcion= $adopcionModel -> existingAdopcion($existingAmo['id'],$existingMascota['id']);
        if ($existingAdopcion)  { 
            $id= $existingAdopcion['id'];
            
            $motivo = $this->request->getVar('motivo');
            if($motivo == "fallecimiento"){
                $fecha_fin = $this->request->getVar('fecha-baja');
                $dataMascota['fecha_defuncion'] = $fecha_fin;
                $mascota->modificar($dataMascota);
            }else{
                $fecha_fin = $this->request->getVar('fecha-fin'); 

            }
            $dataAdopcion = [
                'id_amo' => $existingAmo['id'],
                'id_mascota' => $existingMascota['id'],
                'fecha_fin' => $fecha_fin,
                'motivo' => $motivo,
            ];
       
            $result = $adopcionModel -> cargarBaja($dataAdopcion,$id);
    
            if ($result ==1) {
                // Inserción exitosa
                return redirect()->back()->with('success', 'La adopción ha sido dada de baja con éxito');
            } else {
                // Error en la inserción de la adopción
                return redirect()->back()->with('error', 'Error al dar de baja la adopción.');
            }
        } else {
            return redirect()->back()->with('error', 'No existe una adopción vigente en el sistema.');
        }
    }else{
        return redirect()->back()->with('error', 'No existe una adopción vigente en el sistema');
    }





    }

}