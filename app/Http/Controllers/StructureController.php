<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Structure;

class StructureController extends Controller
{
    
        public function index()
        {
            $structures = Structure::all();
            return view ('layouts.index')->with('structures', $structures);
        }
     
        
        public function create()
        {
            return view('layouts.create');
        }
     
       
        public function store(Request $request)
        {
            $input = $request->all();
            Structure::create($input);
            return redirect('structure')->with('flash_message', 'Structure Addedd!');  
        }
     
        
        public function show($id)
        {
            $structure = Structure::find($id);
            return view('layouts.show')->with('structures', $structure);
        }
     
        
        public function edit($id)
        {
            $structure = Structure::find($id);
            return view('layouts.edit')->with('structures', $structure);
        }
     
      
        public function update(Request $request, $id)
        {
            $structure = Strucrure::find($id);
            $input = $request->all();
            $structure->update($input);
            return redirect('structure')->with('flash_message', 'structure Updated!');  
        }
     
       
        public function destroy($id)
        {
            Structure::destroy($id);
            return redirect('structure')->with('flash_message', 'Structure deleted!');  
        }
}
