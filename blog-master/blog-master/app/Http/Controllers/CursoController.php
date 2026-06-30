<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
   
    public function inicio(){

       return view('cursos.bootstrapPractica');

    }
   
   
   
    public function index(){

        $cursos=  Curso::orderby('id')->get();
       return view('cursos.listarCursos', compact('cursos'));

    }

    public function create(){
        return view('cursos.create');
    }


    public function store(Request $request){
    
        $curso= new Curso();
        $curso->name=$request->name;
        $curso->descripcion=$request->descripcion;
     
        //ADJUNTAR EL PDF
         $file=$request->file("urlPdf");
         $nombreArchivo = "pdf_".time().".".$file->guessExtension();
         $request->file('urlPdf')->storeAs('public/imagenes', $nombreArchivo );
         $curso->urlPdf = $nombreArchivo;
         $curso->save();
            
    }

    public function show(Curso $curso){

        return $curso;


    }


    // public function edit(Curso $curso){
        
    //     if($temp=Curso::find($curso>idCurso)){
    //         $cliente=$temp;
    //          return view('pqrsd.edit',compact('pqrsd','cliente'));
    //     }
    //     $cliente = new Cliente();
    //     return view('pqrsd.edit',compact('pqrsd','cliente'));

    // }



    public function destroy (Curso $curso){
        $curso->delete();
        return redirect()->route('pqrsds.index');
    }




    /*

    public function show($curso){
        //compact('curso')// ['curso'=>$curso]
        // return view('cursos.show',['curso'=>$curso]);
        return view('cursos.show',compact('curso'));
    }*/
}
