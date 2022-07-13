<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductosCollection;
use App\Models\Categorias;
use Carbon\Carbon;


use Illuminate\Support\Facades\Validator;

use App\Models\Productos;
use Illuminate\Http\Request;
/* use Illuminate\Http\Response; */

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productsAll = Productos::select('*')->get();        
        return view('admin.productos.listAll', compact('productsAll'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categorias:: select('*')->get();        
        return view('admin.productos.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:100',
            'valor_producto' => 'required|min:1',
            'categoria' => 'required',
        ]);       
        if ($request->post() || $validated) {           
            $producto = new Productos();
            $producto->nombre = $request->name;
            $producto->valor = $request->valor_producto;            
            $producto->fecha_expiracion = Carbon::now();  
            $producto->id_categoria = $request->categoria;          
            $producto->save();
        }
        return redirect('productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Productos::where('id', $id)->get();
        return view('admin.productos.edit', compact($producto));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Productos::where('id', $id)->delete();
        return redirect('productos');
    }

    public function getAllProducts(){
        $products = Productos::all();          
        return ProductosCollection::collection($products);
        /* return $products; */
    }


    public static function getProducto($id){
        $product = Productos::select('*')->where('id', $id);
        return json_encode($product);  

    }
}
