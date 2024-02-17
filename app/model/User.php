<?php 
	
	use Fabricio\Database\Connection;
	
	class User
	{
		private $id;
		private $name;
		private $email;
		private $password;

		public function validateLogin()
		{
			$conn = Connection::getConn();
 			//selecionar o usuario que tenha o mesmo email do informado
 			$sql = 'SELECT * FROM user WHERE email = :email';

 			$stmt = $conn->prepare($sql);
 			$stmt->bindValue(':email', $this->email);
 			$stmt->execute();

 			if($stmt->rowCount()){
 				$result = $stmt->fetch();

 				if ($result['pass'] === $this->password){
 					 $_SESSION['usr'] = $result['id'];

 					 return true;
 				}
 			}

 			throw new \Exception('Login Inválido');

			//conferia a senha
			//se tiver tudo ok....criar session e direcionar pra tela dashboard
			//se tiver algum erro... redirecionar de volta para a tela inicial
		}

		public function setEmail($email)
		{
			$this->email = $email;
		}

		public function setName($name)
		{
			$this->name = $name;
		}

		public function setPassword($password)
		{
			$this->password = $password;
		}

		public function getName()
		{
			return $this->name;
		}

		public function getEmail()
		{
			return $this->email;
		}

		public function getPassword()
		{
			return $this->password;
		}
	}
 ?>