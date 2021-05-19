<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:th="https://www.thymeleaf.org"
      xmlns:sec="https://www.thymeleaf.org/thymeleaf-extras-springsecurity3">
    <head>
        <title>Spring Security Example </title>
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
        <div class="container">
        <div th:if="${param.error}">
            Invalid username and password.
        </div>
        <div th:if="${param.logout}">
            You have been logged out.
        </div>
        <form th:action="@{/login}" method="post">
            <div><label> User Name : <input type="text" class="form-control" name="username"/> </label></div>
            <div><label> Password: <input type="password" class="form-control" name="password"/> </label></div>
            <div><input type="submit" value="Sign In"/></div>
        </form>
        </div>
        <footer style="margin-top:20px;  text-align:center">
			&copy;2021 - hackcode@gmail.com<br>
			Desarrollado con SptringFramework, Bootstrap
		</footer>
		<script th:src="@{/bootstrap/js/bootstrap.js}"></script>
    </body>
</html>