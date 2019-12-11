<?php

namespace App\Http\Controllers;

use App\Carrito;
use App\Carritoproducto;
use App\Producto;
use App\Publicacion;
use App\Cliente;
use App\User;
use App\Nota;
use App\Detalle;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function show(Carrito $carrito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function edit(Carrito $carrito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carrito $carrito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carrito $carrito)
    {
        //
    }

    // API
    public function getCarritoApi($uid)
    {
        $user = User::where('id_firebase', $uid)->first();
        if ($user != null) {
            $cliente = Cliente::where('id_user', $user->id)->first();
            $carrito = Carrito::where('id_cliente', $cliente->id)->first();
            $carritoProductos = Carritoproducto::where('id_carrito', $carrito->id)->where('estado', true)->get();
            // dd($carritoProductos);
            $total = 0;
            foreach ($carritoProductos as $cartProducto) {
                $total = $total + $cartProducto->subtotal;
                $cartProducto->producto = Producto::find($cartProducto->id_producto);
                $cartProducto->publicacion = Publicacion::where('id_producto', $cartProducto->id_producto)
                    ->orderBy('created_at', 'DESC')->first();
            }
            // dd($total);
            $carritoProductos->total = $total;
            return \response()->json($carritoProductos, 200);
        }
    }
    public function getCarritoTotalApi($uid)
    {
        $user = User::where('id_firebase', $uid)->first();
        if ($user != null) {
            $cliente = Cliente::where('id_user', $user->id)->first();
            $carrito = Carrito::where('id_cliente', $cliente->id)->first();
            $carritoProductos = Carritoproducto::where('id_carrito', $carrito->id)->where('estado', true)->get();
            // dd($carritoProductos);
            $total = 0;
            $totalMonedas = 0;

            foreach ($carritoProductos as $cartProducto) {
                $cartProducto->producto = Producto::find($cartProducto->id_producto);
                $cartProducto->publicacion = Publicacion::where('id_producto', $cartProducto->id_producto)
                    ->orderBy('created_at', 'DESC')->first();
                $total = $total + ($cartProducto->producto->precio);
                $totalMonedas = $totalMonedas + ($cartProducto->producto->precio * (1 - $cartProducto->publicacion->precio_oferta));
            }
            // dd($total);
            $total = round($total, 2);
            $totalMonedas = round($totalMonedas, 2);

            $carrito->total = $total;
            $carrito->totalMonedas = $totalMonedas;
            return \response()->json($carrito, 200);
        }
    }
    public function comprarApi(Request $request)
    {
        $user = User::where('id_firebase', $request->id_firebase)->first();
        if ($user != null) {
            $cliente = Cliente::where('id_user', $user->id)->first();
            $carrito = Carrito::where('id_cliente', $cliente->id)->first();
            $carritoProductos = Carritoproducto::where('id_carrito', $carrito->id)->where('estado', true)->get();
            // dd($carritoProductos);
            $total = 0;
            $totalMonedas = 0;
            $monedas = 0;
            foreach ($carritoProductos as $cartProducto) {
                $producto = Producto::find($cartProducto->id_producto);
                $publicacion = Publicacion::where('id_producto', $cartProducto->id_producto)
                    ->orderBy('created_at', 'DESC')->first();
                $total = $total + ($producto->precio);
                $totalMonedas = $totalMonedas + ($producto->precio * (1 - $publicacion->precio_oferta));
                $monedas = $monedas + $publicacion->cant_monedas;
            }
            // dd($total);
            $total = round($total, 2);
            $totalMonedas = round($totalMonedas, 2);

            if ($cliente->monedas >= $monedas) {
                //Hay compra
                $nota = new Nota();
                $nota->monto_total = $totalMonedas;
                $nota->save();
                foreach ($carritoProductos as $cartProducto) {
                    $publicacion = Publicacion::where('id_producto', $cartProducto->id_producto)
                        ->orderBy('created_at', 'DESC')->first();
                    $detalle = new Detalle();
                    $detalle->id_publicacion = $publicacion->id;
                    $detalle->id_carrito_prod = $cartProducto->id;
                    $detalle->id_nota = $nota->id;
                    $detalle->cantidad = $cartProducto->cantidad;
                    $detalle->subtotal = $cartProducto->subtotal;
                    $detalle->save();
                    $cartProducto->estado = false;
                    $cartProducto->save();
                }
                $monedasTotal = $cliente->monedas - $monedas;
                $cliente->monedas = $monedasTotal;
                $cliente->save();
                return \response()->json($nota, 200);
            } else {
                //NO HAY COMPRA
                return \response()->json();
            }
        }
    }

    public function carritoAddApi(Request $request, $idp)
    {
        $producto = Producto::find($idp);
        $user = User::where('id_firebase', $request->id_firebase)->first();
        if ($producto != null && $user != null) {
            $cliente = Cliente::where('id_user', $user->id)->first();
            $carrito = Carrito::where('id_cliente', $cliente->id)->first();
            $carritoProd = new Carritoproducto();
            $carritoProd->id_carrito = $carrito->id;
            $carritoProd->id_producto = $producto->id;
            $carritoProd->cantidad = $request->cantidad;
            $carritoProd->subtotal = $producto->precio * $request->cantidad;
            $carritoProd->save();
            return \response()->json($carritoProd, 200);
        } else {
            // return \response()->json(false, 401);
        }
    }
    public function delCartProdApi(Request $request)
    {
        $carritoProducto = Carritoproducto::find($request->id_carritoProducto);
        if ($carritoProducto != null) {
            $carritoProducto->estado = false;
            $carritoProducto->save();
            return \response()->json($carritoProducto, 200);

        }
    }
}
