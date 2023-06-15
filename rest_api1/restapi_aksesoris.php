<?php
require_once "koneksi.php";
if(function_exists($_GET['function'])){
    $_GET['function']();
}
function insert_aksesoris(){
    global $connect;
    $check = array('id' => '', 'nama' => '', 'harga'=>'');
    $check_match = count(array_intersect_key($_POST, $check));
    if($check_match = count($check)){
        $result = mysqli_query($connect, "INSERT INTO aksesoris SET 
        id = '$_POST[id]',
        nama = '$_POST[nama]',
       harga = '$_POST[harga]' ");

        if($result){
            $respons = array(
                'status' =>1,
                'message' => 'Insert Data Sukses'
            );
        }
        else{
            $respons=array(
                'status'=>0,
                'message'=> 'Gagal Insert Data'
            );
        }
    }
    else{
        $respons=array(
            'status'=>0,
            'message'=>'parameternya salah'
        );
    }
    header('content-type:application/json');
    echo json_encode($respons);
}
function get_aksesoris(){
    global $connect;
    $query = $connect -> query("SELECT * FROM aksesoris");
    while($row=mysqli_fetch_object($query)){
        $data[]=$row;
    }
    $respons=array(
        'status'=>1,
        'message'=>'Sukses Menampilkan Data',
        'data'=>$data
    );
    header('content-type: application/json');
    echo json_encode($respons);

}
function get_aksesoris_id(){
    global $connect;
    if(!empty($_GET["id"])){
        $id=$_GET["id"];
    }
    $query = "SELECT * FROM aksesoris WHERE id=$id";
    $result = $connect->query($query);
    while($row = mysqli_fetch_object($result)){
        $data[]=$row;
    }
    if($data){
        $respons=array(
            'status'=>1,
            'message'=> 'Sukses Menampilkan Data Berdasarkan ID',
            'data'=> $data
        );
    }
    else{
        $respons=array(
            'status'=>0,
            'message'=> 'Data Tidak Ditemukan'
        );
    }
    header('content-type: application/json');
    echo json_encode($respons);

}
function update_aksesoris(){
    global $connect;
    if(!empty($_GET["id"])){
        $id=$_GET["id"];
    }
    $check=array('nama'=>'', 'harga'=>'');
    $check_match=count(array_intersect_key($_POST, $check));
    if ($check_match == count($check)){
        $result=mysqli_query($connect, "UPDATE aksesoris SET
        nama ='$_POST[nama]',
        harga ='$_POST[harga]' WHERE id = $id");
        if($result){
            $respons=array(
                'status'=>1,
                'message'=>'Update Data Berhasil'
            );
        }
        
        }else{
            $respons=array(
                'status'=>0,
                'message'=>'Gagal Mengupdate Data'
            );

    }
    header('contect-type: application/json');
    echo json_encode($respons);
}
function hapus_aksesoris(){
    global $connect;
    $id=$_GET['id'];
    $query = "DELETE FROM aksesoris WHERE id = ".$id;
    if(mysqli_query($connect,$query)){
        $respons=array(
            'status'=>1,
            'message'=>'Hapus Data Berhasil'
        );
    }
    else{
        $respons=array(
            'status'=>0,
            'message'=>'Gagal Menghapus Data'
        );
    }
    header('content-type: application/json');
    echo json_encode($respons);
}

