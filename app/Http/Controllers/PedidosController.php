<?php

namespace App\Http\Controllers;

use App\Models\Pedidos;
use App\Models\Empleados;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    /**
     * Get all pedidos
     * @return \Illuminate\Http\Response|\Laravel\Lumen\Http\ResponseFactory
     */
    public function getAll()
    {
        try {
            $listado  = Pedidos::select(
                "pedidos.*",
                "empleados.nombres as nombre_empleado",
                "tipos_mesas.nombre as tipo_mesa"
            )
                ->join("empleados", "empleados.id", "=", "pedidos.id_empleado")
                ->join("mesas", "mesas.id", "=", "pedidos.id_mesa")
                ->join("tipos_mesas", "tipos_mesas.id", "=", "mesas.id_tipo_mesa")
                ->get();

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
            $pedido = Pedidos::select(
                "pedidos.fecha",
                "pedidos.hora",
                "pedidos.cliente",
                "empleados.nombres as nombre_empleado",
                "tipos_mesas.nombre as tipo_mesa"
            )
                ->join("empleados", "empleados.id", "=", "pedidos.id_empleado")
                ->join("mesas", "mesas.id", "=", "pedidos.id_mesa")
                ->join("tipos_mesas", "tipos_mesas.id", "=", "mesas.id_tipo_mesa")
                ->where('fecha', $date)
                ->where('hora', $hour)
                ->where('cliente', $client)
                ->first();
            return response()->json($pedido);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 404);
        }
    }

    /**
     * Create pedido
     * @return \Illuminate\Http\Response|\Laravel\Lumen\Http\ResponseFactory
     */
    public function create(Request $request)
    {
        try {
            $this->validate($request, [
                'fecha' => ['required'],
                'hora' => ['required'],
                'cliente' => ['required'],
                'hora_entrega_estimada' => ['required'],
                'id_mesa' => ['required'],
                'id_empleado' => ['required'],
            ]);
            $fecha = $request->input('fecha');
            $hora = $request->input('hora');
            $cliente = $request->input('cliente');
            $hora_entrega_estimada = $request->input('hora_entrega_estimada');
            $id_mesa = $request->input('id_mesa');
            $id_empleado = $request->input('id_empleado');

            $pedido = Pedidos::create([
                'fecha' => $fecha,
                'hora' => $hora,
                'cliente' => $cliente,
                'hora_entrega_estimada' => $hora_entrega_estimada,
                'id_mesa' => $id_mesa,
                'id_empleado' => $id_empleado
            ]);
            
            return response()->json("Se creo el pedido");
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 404);
        }
    }
}
