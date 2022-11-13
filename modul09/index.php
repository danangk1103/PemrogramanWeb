<?php
require_once "koneksi.php";
$mhs = new Mahasiswa();
$request_method=$_SERVER["REQUEST_METHOD"];
switch ($request_method) {
	case 'GET':
			if(!empty($_GET["NIM"]))
			{
				$id=intval($_GET["NIM"]);
				$mhs->get_mhs($id);
			}
			else
			{
				$mhs->get_mhss();
			}
			break;
	case 'POST':
			if(!empty($_GET["NIM"]))
			{
				$id=intval($_GET["NIM"]);
				$mhs->update_mhs($id);
			}
			else
			{
				$mhs->insert_mhs();
			}		
			break; 
	case 'DELETE':
		    $id=intval($_GET["NIM"]);
            $mhs->delete_mhs($id);
            break;
	default:
		// Invalid Request Method
			header("HTTP/1.0 405 Method Not Allowed");
			break;
		break;
}

class Mahasiswa 
{

	public  function get_mhss()
	{
		global $mysqli;
		$query="SELECT * FROM tbl_mahasiswa";
		$data=array();
		$result=$mysqli->query($query);
		while($row=mysqli_fetch_object($result))
		{
			$data[]=$row;
		}
		$response=array(
							'status' => 1,
							'message' =>'Get List Mahasiswa Successfully.',
							'data' => $data
						);
		header('Content-Type: application/json');
		echo json_encode($response);
	}

	public function get_mhs($id=0)
	{
		global $mysqli;
		$query="SELECT * FROM tbl_mahasiswa";
		if($id != 0)
		{
			$query.=" WHERE NIM=".$id." LIMIT 1";
		}
		$data=array();
		$result=$mysqli->query($query);
		while($row=mysqli_fetch_object($result))
		{
			$data[]=$row;
		}
		$response=array(
							'status' => 1,
							'message' =>'Get Mahasiswa Successfully.',
							'data' => $data
						);
		header('Content-Type: application/json');
		echo json_encode($response);
		 
	}

	public function insert_mhs()
		{
			global $mysqli;
			$arrcheckpost = array('NIM' => '', 'nama' => '', 'angkatan' => '', 'semester' => '', 'IPK'   => '', 'email'   => '', 'telepon'   => '');
			$hitung = count(array_intersect_key($_POST, $arrcheckpost));
			if($hitung == count($arrcheckpost)){
			
					$result = mysqli_query($mysqli, "INSERT INTO tbl_mahasiswa SET
					NIM = '$_POST[NIM]',
					nama = '$_POST[nama]',
					angkatan = '$_POST[angkatan]',
					semester = '$_POST[semester]',
					IPK = '$_POST[IPK]',
					email = '$_POST[email]',
					telepon = '$_POST[telepon]'");
					
					if($result)
					{
						$response=array(
							'status' => 1,
							'message' =>'Mahasiswa Added Successfully.'
						);
					}
					else
					{
						$response=array(
							'status' => 0,
							'message' =>'Mahasiswa Addition Failed.'
						);
					}
			}else{
				$response=array(
							'status' => 0,
							'message' =>'Parameter Do Not Match'
						);
			}
			header('Content-Type: application/json');
			echo json_encode($response);
		}

	function update_mhs($id)
		{
			global $mysqli;
			$arrcheckpost = array('NIM' => '', 'nama' => '', 'angkatan' => '', 'semester' => '', 'IPK'   => '', 'email'   => '', 'telepon'   => '');
			$hitung = count(array_intersect_key($_POST, $arrcheckpost));
			if($hitung == count($arrcheckpost)){
			
		        $result = mysqli_query($mysqli, "UPDATE tbl_mahasiswa SET
		        NIM = '$_POST[NIM]',
				nama = '$_POST[nama]',
				angkatan = '$_POST[angkatan]',
				semester = '$_POST[semester]',
				IPK = '$_POST[IPK]',
				email = '$_POST[email]',
				telepon = '$_POST[telepon]'
		        WHERE NIM='$id'");
		   
				if($result)
				{
					$response=array(
						'status' => 1,
						'message' =>'Mahasiswa Updated Successfully.'
					);
				}
				else
				{
					$response=array(
						'status' => 0,
						'message' =>'Mahasiswa Updation Failed.'
					);
				}
			}else{
				$response=array(
							'status' => 0,
							'message' =>'Parameter Do Not Match'
						);
			}
			header('Content-Type: application/json');
			echo json_encode($response);
		}

	function delete_mhs($id)
	{
		global $mysqli;
		$query="DELETE FROM tbl_mahasiswa WHERE NIM=".$id;
		if(mysqli_query($mysqli, $query))
		{
			$response=array(
				'status' => 1,
				'message' =>'Mahasiswa Deleted Successfully.'
			);
		}
		else
		{
			$response=array(
				'status' => 0,
				'message' =>'Mahasiswa Deletion Failed.'
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response);
	}
}
?>