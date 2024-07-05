<?php
namespace App\Controllers;
use App\Models\mascotaModel;
use App\Models\amoModel;
use App\Models\adopcionModel;
class mascotaController extends BaseController
{


    //### MASCOTAS ###########################################
    public function altaMascota()
    {return view('mascotas/altaMascota');}

    public function modificarMascota()
    {return view('mascotas/modificarMascota'); }

    public function mostrarMascotas()
    {
        $mascotas = new mascotaModel();
        $data['mascotas'] = $mascotas -> orderBy('id','ASC') -> findAll();
        return view('mascotas/mostrarMascotas',$data);
    }

    public function cargarMascota()
    {
        $mascotas = new mascotaModel();
    
        $data = [
            'nombre' => $this->request->getVar('nombre'),
            'raza' => $this->request->getVar('raza'),
            'especie' => $this->request->getVar('especie'),
            'sexo' => $this->request->getVar('sexo'),
            'nro_registro' => $this->request->getVar('registro'),
            'edad' => $this->request->getVar('edad'),
            'fecha_alta' => $this->request->getVar('fecha-alta')
        ];
    
        $result = $mascotas->insertar($data);
    
        if ($result == 1) {
            return redirect()->back()->with('success', '¡La mascota ha sido dada de alta con éxito!');
        } else if ($result == 0) {
            // Retrieve the submitted data and pass it back to the view
            return redirect()->back()->withInput()->with('error', 'Error al cargar: La mascota ya se encuentra en el sistema');
        } else {
            return redirect()->back()->withInput()->with('error', 'Error al dar de alta a la mascota.');
        } 
    }

    public function hacerModificacion(){
        $mascotas = new mascotaModel();


        $data = [
            'nombre' => $this->request->getVar('nombre'),
            'raza' => $this->request->getVar('raza'),
            'especie' => $this->request->getVar('especie'),
            'sexo' => $this->request->getVar('sexo'),
            'nro_registro' => $this->request->getVar('registro'),
            'edad' => $this->request->getVar('edad'),
            'fecha_alta' => $this->request->getVar('fecha-alta'),
            'fecha_defuncion' => $this->request->getVar('fecha-defuncion')
        ];


        $result =$mascotas->modificar($data);
       
            if ($result == 1) {
                // Inserción exitosa
                return redirect()->to('http://localhost/veterinaria/modificarMascota')->with('success', '¡Los datos de la mascota han sido modificados con éxito!');
            } else{
                return redirect()->to('http://localhost/veterinaria/modificarMascota')->with('error', 'Error al modificar los datos de la mascota.');
            }

    }


    public function modificarMascotas()
    {
        $mascotas = new mascotaModel();
        $data = [
            'registro' => $this->request->getVar('registro'),
        ];
    
        $existingMascota = $mascotas->existingMascota($data['registro']);
    
        if ($existingMascota) {
            return view('/mascotas/modificarM',['existingMascota' => $existingMascota]);
        } else {
            return redirect()->back()->with('error', 'Error: No se encuentra la mascota en el sistema.');
        }
    }

    public function mostrarM(){
        $mascotas = new mascotaModel();
        $amos = new amoModel();
        $adopcionesDetalladas = array();
        $adopciones = new adopcionModel();
        
        $data = [
            'registro' => $this->request->getVar('registro'),
        ];
    
        $existingMascota = $mascotas->existingMascota($data['registro']);

    
        if ($existingMascota) {

            $existingAdopciones=$adopciones->existingAdopcionesM($existingMascota['id']);

            if($existingAdopciones){
                $adopcionesDetalladas = array();
                foreach ($existingAdopciones as $adopcion) {
                    $amo = $amos-> existingAmos($adopcion['id_mascota']);
        
                    $adopcionDetallada = array(
                        'nombre_amo' => $amo['nombre'],
                        'dni_amo' => $amo['dni'],
                        'fecha_inicio' => $adopcion['fecha_inicio'],
                        'fecha_fin' => $adopcion['fecha_fin'],
                    );
                    
                    $adopcionesDetalladas[] = $adopcionDetallada;
                }

                
            }
        
            return view('/mascotas/mostrarM', [
                'existingMascota' => $existingMascota,
                'existingAdopciones' =>  $adopcionesDetalladas
            ]);
        } else {
            return redirect()->back()->with('error', 'Error: No se encuentra la mascota en el sistema.');
        }
    }

} 