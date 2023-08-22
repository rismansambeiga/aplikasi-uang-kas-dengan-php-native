<?php 
	require 'connection.php';
	$id_anggota = $_GET['id_anggota'];
	if (isset($id_anggota)) {
		if (deleteSiswa($id_anggota) > 0) {
			setAlert("Anggota has been deleted", "Successfully deleted", "success");
		    header("Location: anggota.php");
	    }
	} else {
	   header("Location: anggota.php");
	}