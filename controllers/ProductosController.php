<?php 
/**
 * 
 */
class ProductosController
{
	
	public function producto(){
		require_once 'views/relacionadoProductos/productos.php';
	}
	public function precio()
	{
		require_once 'views/relacionadoProductos/precios.php';
	}
}

