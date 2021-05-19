package brayan.hernandez.org.service;

import java.time.LocalDate;
import java.time.format.DateTimeFormatter;
import java.time.format.DateTimeParseException;
import java.util.LinkedList;
import java.util.List;

import org.springframework.stereotype.Service;

import brayan.hernandez.org.model.Producto;

@Service
public class ProductosServiceImp implements IntProductoService {
	
	private List<Producto>lista;
	
	public ProductosServiceImp() {
		lista=new LinkedList<Producto>();
		
		//Tipo para formatear la fecha con LocalDate
		DateTimeFormatter formato=DateTimeFormatter.ofPattern("dd-MM-yyyy");
		
		try {
		Producto p1=new Producto();
		p1.setId(1);
		p1.setNombre("Martillo");
		p1.setDescripcion("Descripción del producto");
		p1.setPrecio(120.0);
		p1.setExistencias(5);
		//p1.setFechaProduccion(LocalDate.now());
		p1.setFechaProduccion(LocalDate.parse("05-04-2021", formato));
		p1.setImagen("71XrNgo3IsL._AC_SX355_.jpg");
		//**********************
		Producto p2=new Producto();
		p2.setId(2);
		p2.setNombre("Pala");
		p2.setDescripcion("Descripción del producto");
		p2.setPrecio(220.0);
		p2.setExistencias(10);
		p2.setFechaProduccion(LocalDate.parse("22-02-2021", formato));
		p2.setImagen("77459434PNM001G.png");
		//**********************
		Producto p3=new Producto();
		p3.setId(3);
		p3.setNombre("Desarmador plano");
		p3.setDescripcion("Descripción del producto");
		p3.setPrecio(45.0);
		p3.setExistencias(8);
		p3.setFechaProduccion(LocalDate.parse("12-01-2021", formato));
		p3.setImagen("41GFLP2aQRL._AC_SL1000_.jpg");
		//**********************
		Producto p4=new Producto();
		p4.setId(4);
		p4.setNombre("Segueta");
		p4.setDescripcion("Descripción del producto");
		p4.setPrecio(68.0);
		p4.setExistencias(12);
		p4.setFechaProduccion(LocalDate.parse("24-03-2021", formato));
		p4.setImagen("17f_23_10_2020_13_27_17_26.jpg");
		//**********************
		Producto p5=new Producto();
		p5.setId(5);
		p5.setNombre("Llave stilson");
		p5.setDescripcion("Descripción del producto");
		p5.setPrecio(85.0);
		p5.setExistencias(10);
		p5.setFechaProduccion(LocalDate.parse("17-07-2021", formato));
		p5.setImagen("llave.jpg");
		
		
		lista.add(p1);
		lista.add(p2);
		lista.add(p3);
		lista.add(p4);
		lista.add(p5);
		
		}catch(DateTimeParseException ex) {
			System.out.println("Error:"+ex.getMessage());
		}
	}

	@Override
	public List<Producto> obtenerTodos() {
		return lista;
	}

	@Override
	public void guardar(Producto producto) {
		lista.add(producto);
		
	}

	@Override
	public void eliminar(Integer idProducto) {
		lista.remove(idProducto);
		
	}

	@Override
	public Producto buscarPorId(Integer idProducto) {
		return lista.get(idProducto);
	}

}