<?php
//CONTROLA LAS VISTAS DEL MENU
namespace App\Controllers;
use App\Models\amoModel;
use App\Models\adopcionModel;
use App\Models\mascotaModel;

class amoController extends BaseController
{


    //### AMOS ###############################################
    public function altaAmos()
    {return view('amos/altaAmo');}

    public function modificarAmos()
    {return view('amos/modificarAmo');}

    public function mostrarAmos()
    {
        $amos = new amoModel();
        $data['amos'] = $amos -> orderBy('id','ASC') -> findAll();
        return view('amos/mostrarAmos', $data); 
    
    }

    public function mostrarAmo($dni,$view) {
        $amo = $this->amoModel->where('dni', $dni)->first();
        if ($amo) {
            $data['amo'] = $amo;
            return view($view, $data);
        } else {
            // Mostrar mensaje de error o redireccionar a otra página
            // en caso de que el amo no exista
        }
    }

    public function cargarAmo()
{
    $amos = new amoModel();

    $data = [
        'nombre' => $this->request->getVar('nombre'),
        'apellido' => $this->request->getVar('apellido'),
        'dni' => $this->request->getVar('dni'),
        'direccion' => $this->request->getVar('direccion'),
        'telefono' => $this->request->getVar('telefono'),
        'fecha_alta' => $this->request->getVar('fecha-alta')
    ];

    $result = $amos->insertar($data);

    if ($result == 1) {
        // Inserción exitosa
        return redirect()->back()->withInput()->with('success', '¡El adoptante ha sido dada de alta con éxito!');
    } else if ($result == 0) {
        // Error en la inserción
        return redirect()->back()->withInput()->with('error', 'Error al cargar: El adoptante ya se encuentra en el sistema.');
    } else {
        return redirect()->back()->withInput()->with('error', 'Error al dar de alta al adoptante.');
    }
}


    public function hacerModificacion(){
        $amos = new amoModel();


        $data = [
            'nombre' => $this->request->getVar('nombre'),
            'apellido' => $this->request->getVar('apellido'),
            'dni' => $this->request->getVar('dni'),
            'direccion' => $this->request->getVar('direccion'),
            'telefono' => $this->request->getVar('telefono'),
            'fecha_alta' => $this->request->getVar('fecha-alta')
        ];

        $result =$amos->modificar($data);
       
            if ($result == 1) {
                // Inserción exitosa
                return redirect()->to('http://localhost/veterinaria/modificarAmo')->with('success', '¡Los datos del adoptante ha sido modificado con éxito!');
            } else{
                return redirect()->to('http://localhost/veterinaria/modificarAmo')->with('error', 'Error al modificar lois datos  al adoptante.');
            }

 
    }
    public function modificarAmo()
    {
        $amos = new amoModel();
        $data = [
            'dni' => $this->request->getVar('dni'),
        ];
    
        $existingAmo = $amos->existingAmo($data['dni']);
    
        if ($existingAmo) {
            return view('/amos/modificarA',['existingAmo' => $existingAmo]);
        } else {
            return redirect()->back()->with('error', 'Error al modificar: No se encuentra al adoptante en el sistema.');
        } 
    }

    public function mostrarA(){
        $amos = new amoModel();
        $mascotas= new mascotaModel();
        $adopciones = new adopcionModel();
        $data = [
            'dni' => $this->request->getVar('dni'),
        ];

        $existingAmo = $amos->existingAmo($data['dni']);
        
        if ($existingAmo ) {
            $existingAdopciones=$adopciones->existingAdopciones($existingAmo['id']);
            $adopcionesDetalladas = array();
          

            foreach ($existingAdopciones as $adopcion) {
                $mascota = $mascotas-> existingMascotas($adopcion['id_mascota']);
       
                $adopcionDetallada = array(
                    'nombre_mascota' => $mascota['nombre'],
                    'registro_mascota' => $mascota['nro_registro'],
                    'fecha_inicio' => $adopcion['fecha_inicio'],
                    'fecha_fin' => $adopcion['fecha_fin'],
                    'motivo' => $adopcion['motivo']
                );
                
                $adopcionesDetalladas[] = $adopcionDetallada;
            }
    
        
            return view('/amos/mostrarA', [
                'existingAmo' => $existingAmo,
                'existingAdopciones' =>  $adopcionesDetalladas
            ]);
        } else {
            return redirect()->back()->with('error', 'No se encuentra al adoptante en el sistema.');
        }



    }


  


}