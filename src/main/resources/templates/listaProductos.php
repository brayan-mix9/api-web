<!DOCTYPE html>
<html lang="es" xmlns:th="http://www.thymeleaf.org">
	<head>
		<meta charset="utf-8">
		<title>tabla</title>
		<link rel="stylesheet" 
			th:href="@{/bootstrap/css/bootstrap.css}">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <div class="container-fluid">
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
		      <a class="navbar-brand" href="#">Hidden brand</a>
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" th:href="@{/}">Home</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" th:href="@{/index}">Productos</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
		        </li>
		      </ul>
		      <span class="text-white">Bienvenido: [[${#httpServletRequest.remoteUser}]]!</span>&nbsp;
		      <form th:action="@{/logout}" method="post">
			  	<input type="submit" value="Salir"/>
			  </form>
		    </div>
		  </div>
		</nav>
		<br>
		<div class="container" >
			<h2 class="text-primary">Lista de productos</h2>
			<div class="table-responsive">
				<table class="table table-striped table-hover table-bordered">
				  <thead>
				    <tr>
				      <th scope="col">id</th>
				      <th scope="col">Nombre</th>
				      <th scope="col">Precio</th>
				      <th scope="col">Fecha Producción</th>
				      <th scope="col">Imagen</th>
				      <th scope="col">Eliminar</th>
				      <th scope="col">Detalles</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr th:each="producto:${productos}">
				      <th scope="row" th:text="${producto.id}"></th>
				      <td th:text="${producto.nombre}"></td>
				      <td th:text="${producto.precio}"></td>
				      <td th:text="${producto.fechaProduccion}"></td>
				      <td>
				      	<img th:src="@{/imgs/{valor}(valor=${producto.imagen})}"
					      width="20px" height="20px">
				      </td>
				      <td><button type="button" class="btn btn-primary">Eliminar</button></td>
				      <td><button type="button" class="btn btn-secondary">Detalles</button></td>
				    </tr>
				  </tbody>
				</table>
			</div><!-- Fin de la tabla resposiive-->
		</container><!-- Fin del container-->
		<footer style="margin-top:20px;  text-align:center">
			&copy;2021 - hackcode@gmail.com<br>
			Desarrollado con SptringFramework, Bootstrap
		</footer>
		<script th:src="@{/bootstrap/js/bootstrap.js}"></script>
	</body>
</html>
	