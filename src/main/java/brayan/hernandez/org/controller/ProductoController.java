package brayan.hernandez.org.controller;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

import brayan.hernandez.org.model.Producto;
import brayan.hernandez.org.service.IntProductoService;

@Controller
public class ProductoController {

	@Autowired
	private IntProductoService productoService;
	
	@GetMapping("/index")
	public String mostrarIndex(Model model) {
		List<Producto> lista = productoService.obtenerTodos();
		for(Producto p : lista) {
			System.out.println(p);
		}
		model.addAttribute("productos", lista);
		return "listaProductos";
	}
}
