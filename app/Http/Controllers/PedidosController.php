<?php

namespace App\Http\Controllers;

use App\Models\Pedidos;

class PedidosController extends Controller
{
    /**
     * Get all pedidos
     * @return \Illuminate\Http\Response|\Laravel\Lumen\Http\ResponseFactory
     */
    public function getAll()
    {
        try {
            $listado  = Pedidos::all();
            return response()->json($listado);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Get the specified pedido.
     * @param  int  $id
     * @return \Illuminate\Http\Response|\Laravel\Lumen\Http\ResponseFactory
     */
    public function getByDateHourClient($date, $hour, $client)
    {
        try {
            $pedido = Pedidos::where('fecha', $date)
                ->where('hora', $hour)
                ->where('cliente', $client)
                ->first();
            return response()->json($pedido);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 404);
        }
    }
}
