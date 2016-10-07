<?php
	class Database{

		private $db;
		private $config = array(
			'host' => 'localhost',
			'database' => 'msp',
			'user' => 'root',
			'pass' => 'root'
			);


		/** 
		* 	Construct
		*	Initialize the DB variable with a PDO database connection
		*
		*	@param none
		*
		*	@return none
		*/
		public function __construct(){
			try{
				$this->db = new PDO('mysql:host='.$this->config['host'].';dbname='.$this->config['database'],$this->config['user'],$this->config['pass']);	
			} catch(PDOException $e){
				$this->LogError("DATABASE CONNECTION $e");
			}
		}


		public function ReturnDB(){
			return $this->db;
		}

		/** 
		* 	CheckLogin
		*	Verify if a username is registred in database
		*
		*	@param login = username to search in database
		*
		*	@return False if no login found or the user ID
		*/
		public function CheckLogin($login){
			$sql = "SELECT id FROM operadores WHERE login=:login";
			$statment = $this->db->prepare($sql);
			$statment->bindParam('login',$login,PDO::PARAM_STR);

			try{
				$statment->execute();
				$result = $statment->fetch();

			} catch(PDOException $e){
				$this->LogError("Impossible to retrieve the user");
			} finally {
				return (!empty($result['id'])) ? $result['id'] : false;
			}


		}


		/** 
		* 	CheckPass
		*	Initialize the DB variable with a PDO database connection
		*
		*	@param none
		*
		*	@return none
		*/
		public function CheckPass($id, $pass){
			$sql = "SELECT senha FROM operadores WHERE id=:id";
			$statment = $this->db->prepare($sql);
			$statment->bindParam('id',$id,PDO::PARAM_STR);
			try{
				$statment->execute();
				$result = $statment->fetch();

			} catch(PDOException $e){
				$this->LogError("Impossible to retrieve the pass");
			} finally {
				return ($result['senha'] == $pass) ? true : false;
			}
		}


		public function CheckActive($id){
			$sql = "SELECT ativo FROM operadores WHERE id=:id";
			$statment = $this->db->prepare($sql);
			$statment->bindParam('id',$id,PDO::PARAM_STR);
			try{
				$statment->execute();
				$result = $statment->fetch();

			} catch(PDOException $e){
				$this->LogError("Impossible to retrieve the active information");
			} finally {
				return ($result['ativo'] == 1) ? true : false;
			}
		}


		public function CheckBlocked($id){
			$sql = "SELECT bloqueado FROM operadores WHERE id=:id";
			$statment = $this->db->prepare($sql);
			$statment->bindParam('id',$id,PDO::PARAM_STR);
			try{
				$statment->execute();
				$result = $statment->fetch();

			} catch(PDOException $e){
				$this->LogError("Impossible to retrieve the active information");
			} finally {
				return ($result['bloqueado'] == 1) ? true : false;
			}
		}


		public function CheckLoginPass($login, $pass){
			$sql = "SELECT * FROM operadores WHERE login=:login and senha=:pass";
			$statment = $this->db->prepare($sql);
			$statment->bindParam('login',$login,PDO::PARAM_STR);
			$statment->bindParam('pass',$pass,PDO::PARAM_STR);
			try{
				$statment->execute();
				$result = $statment->fetch();

			} catch(PDOException $e){
				$this->LogError("Impossible to retrieve the login information");
			} finally {
				return (!empty($result['id'])) ? $result : false;
			}
		}


		public function SelectDespesas(){
			$sql = "SELECT * FROM depesas";
			$statment = $this->db->prepare($sql);
			try{
				$statment->execute();
				$result = $statment->fetch();

			} catch(PDOException $e){
				$this->LogError("Impossible to query the database");
			} finally {
				return (!empty($result['id'])) ? $result : false;
			}	
		}

		public function SelectDespesasCat(){
			$sql = "SELECT * FROM despesas D LEFT JOIN categorias_despesas C ON D.categoria = C.id";
			$statment = $this->db->prepare($sql);
			try{
				$statment->execute();
				$result = $statment->fetchAll();

			} catch(PDOException $e){
				$this->LogError("Impossible to retrieve the login information");
			} finally {
				return $result;
			}
		}


		/** 
		* 	LogError
		*	Log an error message in a text file
		*
		*	@param msg = message to save in the file
		*
		*	@return none
		*/
		private function LogError($msg){
			require_once "log.inc.php";
			$log = new LogFile();
			$log->Write($msg, "ERROR");
		}
		
	}
?>