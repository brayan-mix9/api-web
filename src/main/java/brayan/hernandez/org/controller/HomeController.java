package brayan.hernandez.org.controller;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

import brayan.hernandez.org.model.Producto;
import brayan.hernandez.org.service.IntProductoService;

@Controller
public class HomeController {
	@Autowired
	private  IntProductoService productosService;
	
	@GetMapping("/login")
	public String login() {
		return "login";
	}
	
	@GetMapping("/")
	public String mostrarIndex(Model  model) {
		List<Producto> lista = productosService.obtenerTodos();
		model.addAttribute("productos", lista);
		return "home";
	}
}
