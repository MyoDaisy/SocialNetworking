<?php

	include '../config/config.php';

	function getAll($table){
		global $dbc;
		$query = "SELECT * FROM $table";
		$result = mysqli_query($dbc,$query);
		$data = [];
		while($row = mysqli_fetch_assoc($result)){
			$data[] = $row;
		}
		return $data;
	}
	
	function getUserFromUserId($userId){
		global $dbc;
		$query = "SELECT * FROM user WHERE user_id=$userId";
		$result = mysqli_query($dbc,$query);
		while($row = mysqli_fetch_assoc($result)){
			$data = $row;
		}
		return $data;
	}

	function getEducationFromUserId($userId){
		global $dbc;
		$query = "SELECT * FROM education WHERE user_id=$userId";
		$result = mysqli_query($dbc,$query);
		$data = [];
		while($row = mysqli_fetch_assoc($result)){
			$data[] = $row;
		}
		return $data;
	}

	function getWorkFromUserId($userId){
		global $dbc;
		$query = "SELECT * FROM work WHERE user_id=$userId";
		$result = mysqli_query($dbc,$query);
		$data = [];
		while($row = mysqli_fetch_assoc($result)){
			$data[] = $row;
		}
		return $data;
	}

	function getStatusFromUserId($userId){
		global $dbc;
		$query = "SELECT * FROM status WHERE user_id=$userId ORDER BY status_id DESC";
		$result = mysqli_query($dbc,$query);
		$data = [];
		while($row = mysqli_fetch_assoc($result)){
			$data[] = $row;
		}
		return $data;
	}

	function getCommentFromStatusId($statusId){
		global $dbc;
		$query = "SELECT * FROM comment WHERE status_id=$statusId";
		$result = mysqli_query($dbc,$query);
		$data = [];
		while($row = mysqli_fetch_assoc($result)){
			$data[] = $row;
		}
		return $data;
	}

	function like($userId, $statusId){
		global $dbc;
		$query = "SELECT * FROM like_status WHERE status_id=$statusId";
		$result = mysqli_query($dbc,$query);
		$data = [];
		while($row = mysqli_fetch_assoc($result)){
			$data[] = $row;
		}

		$query_like = "INSERT INTO like_status(status_id, user_id)
						VALUES($statusId, $userId)";
		$result = mysqli_query($dbc,$query);
		$data;
		while($row = mysqli_fetch_assoc($result)){
			$data = $row;
		}
		return $data;
	}




?>