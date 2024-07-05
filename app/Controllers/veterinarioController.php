<?php
//CONTROLA LAS VISTAS DEL MENU
namespace App\Controllers;
use App\Models\veterinarioModel;
class veterinarioController extends BaseController
{ 

    //### VETERINARIOS ########################################
    public function altaVeterinario()
    { return view('veterinarios/altaVeterinario');}

    public function modificarVeterinario()
    {return view('veterinarios/modificarVeterinario');}

    public function bajaVeterinario()
    {return view('veterinarios/bajaVeterinario');}

    public function mostrarVeterinarios() 
    {
        $veterinario = new veterinarioModel();
        $data['veterinarios'] = $veterinario -> orderBy('id','ASC') -> findAll();
        return view('veterinarios/mostrarVeterinarios',$data);
    }

    public function cargarVeterinario()
{
    $veterinario = new veterinarioModel();

    // Capturo los datos del formulario
    $data = [
        'nombre' => $this->request->getVar('nombre'),
        'apellido' => $this->request->getVar('apellido'),
        'dni' => $this->request->getVar('dni'),
        'especialidad' => $this->request->getVar('especialidad'),
        'telefono' => $this->request->getVar('telefono'),
        'fecha_ingreso' => $this->request->getVar('fecha-alta')
    ];

    
 
    $result = $veterinario->insertar($data);
    // Envío los datos al modelo

    if ($result == 1) {
        // Inserción exitosa
        return redirect()->back()->with('success', '¡El médico veterinario ha sido dada de alta con éxito!');
    } else if ($result == 0) {
        // Error en la inserción
        return redirect()->back()->withInput()->with('error', 'Error al cargar: El médico veterinario ya se encuentra en el sistema');
    } else {
        return redirect()->back()->withInput()->with('error', 'Error al dar de alta al médico veterinario.');
    }
}



    public function nuevaBaja(){
        $veterinario = new veterinarioModel();
        $result=0;
        $data = [
            'dni' => $this->request->getVar('dni'),
            'fecha_egreso' => $this->request->getVar('fecha-baja')   
        ];

        $existingVeterinario = $veterinario -> existingVeterinario($data['dni']);
        if($existingVeterinario){
            $result= $veterinario -> modificar($data);
        }
        
        if($result==1){
            return redirect()->back()->with('success', 'El médico veterinario ha sido dada de baja con éxito');
        }else if($result == 0){
            return redirect()->back()->with('error', 'Error al dar de baja: El médico veterinario no se encuentra en el sistema');
        }else{
            return redirect()->back()->with('error', 'Error al dar de baja al médico veterinario.');

        } 

    }

    public function hacerModificacion(){
        $veterinario = new veterinarioModel();
        $data = [
            'nombre' => $this->request->getVar('nombre'),
            'apellido' => $this->request->getVar('apellido'),
            'dni' => $this->request->getVar('dni'),
            'especialidad' => $this->request->getVar('especialidad'),
            'telefono' =>$this->request->getVar('telefono'),
            'fecha_ingreso' => $this->request->getVar('fecha-alta')  
        ];
        $result = $veterinario -> modificar($data);
        if ($result == 1) {
            // Inserción exitosa
            return redirect()->to('http://localhost/veterinaria/modificarVeterinario')->with('success', '¡Los datos del médico han sido modificados con éxito!');
        } else{
            return redirect()->to('http://localhost/veterinaria/modificarVeterinario')->with('error', 'Error al modificar los datos del médico.');
        }
    }

    public function modificarVeterinarios(){
        $veterinario = new veterinarioModel();
        $data = [
            'dni' => $this->request->getVar('dni'),
        ];
    
        $existingVeterinario = $veterinario->existingVeterinario($data['dni']);
    
        if ($existingVeterinario) {
            return view('/veterinarios/modificarV',['existingVeterinario' => $existingVeterinario]);
        } else {
            return redirect()->back()->with('error', 'Error: No se encuentra el médico veterinario en el sistema.');
        }
    }
    public function mostrarV(){
        $veterinario = new veterinarioModel();
        $data = [
            'dni' => $this->request->getVar('dni'),
        ];
     
        $existingVeterinario = $veterinario->existingVeterinario($data['dni']);
    
        if ($existingVeterinario) {
            return view('/veterinarios/mostrarV',['existingVeterinario' => $existingVeterinario]);
        } else {
            return redirect()->back()->with('error', 'Error: No se encuentra el médico veterinario en el sistema.');
        } 
    }

 
}