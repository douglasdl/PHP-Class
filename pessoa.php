<?php
	/**
	 * Pessoa
	 */
	class Pessoa {
		private $nome;
		private $sobrenome;
		private $altura;

		private static $inicioScript = "<script>";
		private static $fimScript = "</script>";
		
		function __construct($nome, $sobrenome, $altura) {
			$this->nome = $nome;
			$this->sobrenome = $sobrenome;
			$this->altura = $altura;
		}

		// Aqui pode pegar com obj, array banco de dados
		function criaObjJS($obj) {
			$pessoaNome = "nome: '" . $obj->getNome() . "', ";
			$pessoaSobrenome = "sobrenome: '" . $obj->getSobrenome() . "', ";
			$pessoaAltura = "altura: " . $obj->getAltura();
			$criaVariavelObj = "var pessoa = { ". $pessoaNome . $pessoaSobrenome . $pessoaAltura . " };";
			$script = Pessoa::$inicioScript . $criaVariavelObj . Pessoa::$fimScript;

			// <scrip> var pessoa = (nome: 'Douglas', sobrenome: 'Dias Leal', altura: '1.75')
			return $script;
		}

		function criaArrayJS($obj) {

		}

		function getNome() {
			return $this->nome;
		}

		function getSobrenome() {
			return $this->sobrenome;
		}

		function getAltura() {
			return $this->altura;
		}

		function getInicioScript() {
			return self::$inicioScript;
		}

		function getFimScript() {
			return self::$fimScript;
		}

		function setNome($nome) {
			$this->nome = $nome;
		}

		function setSobrenome($sobrenome) {
			$this->sobrenome = $sobrenome;
		}

		function setAltura() {
			$this->altura = $altura;
		}
	}
?>