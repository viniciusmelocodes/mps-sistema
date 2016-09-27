<?php 

	class LogFile{

		private $log_file = 'log_file.txt';
		private $log_path = '../logs/';


		public function __construct(){

			if(!file_exists($this->log_file)){
				$log = fopen($this->log_file, 'w');
				fwrite($log, "Sistema de logs para o webapp MPS Consultoria\r\n");
				fwrite($log, "Arquivo gerado automaticamente. Não editar esse arquivo.\r\n");
				fclose($log);
			}

		}

		public function Write($msg, $status){
			$log = fopen($this->log_file, 'a');
			fwrite($log, date('r')."[$status] - $msg \r\n");
			fclose($log);
		}

	}

?>