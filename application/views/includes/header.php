<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo_da_pagina ?></title>

	 <link rel="stylesheet" href="<?php echo base_url();?>css/foundation.css">

  <!-- This is how you would link your custom stylesheet -->
  <link rel="stylesheet" href="<?php echo base_url();?>css/app.css">
  <link rel="stylesheet" href="<?php echo base_url();?>font-awesome/css/font-awesome.min.css">
  
<script src="<?php echo base_url();?>js/vendor/jquery.js"></script>
  <script src="<?php echo base_url();?>js/vendor/modernizr.js"></script>
  <script src="<?php echo base_url();?>js/buscarid.js"></script>
 <script >
  $(document).ready(function(){

 buscarId();

  });
 </script>
   
</head>
<body>