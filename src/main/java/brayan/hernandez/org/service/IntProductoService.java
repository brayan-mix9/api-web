package brayan.hernandez.org.service;

import java.util.List;


import brayan.hernandez.org.model.Producto;

public interface IntProductoService {
	
	public List<Producto> obtenerTodos();
	public void guardar(Producto producto);
	public void eliminar(Integer idProducto);
	public Producto buscarPorId(Integer idProducto);
}
