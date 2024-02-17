<?php 

	class DashboardController
	{
		public function index()
		{
			 echo 'Logado com sucesso! <a href="http://localhost/estudo/login-rc/dashboard/logout">Fazer Logout</a>';
		}

		public function logout()
		{
			unset($_SESSION['usr']);
			session_destroy();

			header('Location: http://localhost/estudo/login-rc/');
		}
	}