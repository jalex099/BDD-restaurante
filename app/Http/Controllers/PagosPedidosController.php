<?php

namespace App\Http\Controllers;

use App\Models\PagosPedidos;
use App\Models\Empleados;
use Illuminate\Http\Request;

class PagosPedidosController extends Controller
{
    /**
     * Get all pedidos
     * @return \Illuminate\Http\Response|\Laravel\Lumen\Http\ResponseFactory
     */
    public function getAll()
    {
        try {
            $listado  = PagosPedidos::select(
                "*",
            )->get();

            return response()->json($listado);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
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
                'id_tipo_pago' => ['required'],
                'hora_pago' => ['required'],
                'id_empleado' => ['required'],
                'subtotal' => ['required'],
                'sum_descuentos' => ['required'],
                'iva' => ['required'],
                'total' => ['required'],
            ]);
            $fecha = $request->input('fecha');
            $hora = $request->input('hora');
            $cliente = $request->input('cliente');
            $id_tipo_pago = $request->input('id_tipo_pago');
            $hora_pago = $request->input('hora_pago');
            $id_empleado = $request->input('id_empleado');
            $subtotal = $request->input('subtotal');
            $sum_descuentos = $request->input('sum_descuentos');
            $iva = $request->input('iva');
            $total = $request->input('total');

            $pedido = PagosPedidos::create([
                'fecha' => $fecha,
                'hora' => $hora,
                'cliente' => $cliente,
                'id_tipo_pago' => $id_tipo_pago,
                'hora_pago' => $hora_pago,
                'id_empleado' => $id_empleado,
                'subtotal' => $subtotal,
                'sum_descuentos' => $sum_descuentos,
                'iva' => $iva,
                'total' => $total
            ]);

            return response()->json($pedido);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 404);
        }
    }
}
