<?php

	require_once("Models/operacionesModelo");

	class MyTests {
	   public function testSumar() {
	       $operObj = new operacionesModelo();

	       assert("$operObj->sumar("one","two") == 'tree'");
	   }
	}