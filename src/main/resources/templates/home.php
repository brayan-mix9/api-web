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
		      <form class="d-flex">
		        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
		        <button class="btn btn-outline-success" type="submit">Search</button>
		      </form>
		    </div>
		  </div>
		</nav>
		<br>
		<div class="container" >
		  	<div class="row row-cols-1 row-cols-md-3 g-4">
			  <div class="col" th:each="producto:${productos}">
			    <div class="card">
			      <img th:src="@{/imgs/{valor}(valor=${producto.imagen})}"
			      width="100px" height="100px" style="margin:10px auto"
			       alt="...">
			      <div class="card-body">
			        <h5 class="card-title" th:text="${producto.nombre}"></h5>
			        <p class="card-text" th:text="${producto.descripcion}"></p>
			      </div>
			      <div class="card-footer">
			      	<button type="button" class="btn btn-primary btn-sm">Detalles</button>
			      </div>
			    </div>
			  </div> 
			</div>
		</div>
		<footer style="margin-top:20px;  text-align:center">
			&copy;2021 - hackcode@gmail.com<br>
			Desarrollado con SptringFramework, Bootstrap
		</footer>
		<script th:src="@{/bootstrap/js/bootstrap.js}"></script>
	</body>
</html>