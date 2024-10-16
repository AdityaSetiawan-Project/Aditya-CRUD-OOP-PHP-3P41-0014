<?php
class Database{
    //property
    public $host = 'localhost';
    public $user = "root";
    public $password = "";
    public $database = "db_php_0014";
    public $connect;

    function __construct(){
        $this->connect = mysqli_connect($this->host, $this->user,$this->password);
        mysqli_select_db($this->connect, $this->database);
    }

    // Function untuk menampilkan data
    function tampilData(){
        $data = mysqli_query($this->connect, "SELECT * FROM tb_user_0014");
        $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
        return $rows;
    }

    // Function untuk menambah data
    function tambahData($nama, $alamat, $nohp){
        mysqli_query($this->connect,"INSERT INTO tb_user_0014 (nama, alamat, nohp) VALUES ('$nama', '$alamat', '$nohp')");
    }

    // Function untuk mengambil data user berdasarkan id
    function editData($id){
        $data = mysqli_query($this->connect, "SELECT * FROM tb_user_0014 WHERE id=$id");
        $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
        return $rows;
    }

    // Function untuk mengupdate data
    function updateData($id, $nama, $alamat, $nohp){
        mysqli_query($this->connect, "UPDATE tb_user_0014 SET nama='$nama', alamat='$alamat', nohp='$nohp' WHERE id='$id'");
    }

    // Function untuk menghapus data
    function hapusData($id){
        mysqli_query($this->connect,"DELETE FROM tb_user_0014 WHERE id='$id'");
    }

    function detailData($id){
        // Mengambil satu data user berdasarkan ID
        $data = mysqli_query($this->connect, "SELECT * FROM tb_user_0014 WHERE id=$id");
        $row = mysqli_fetch_assoc($data); 
        return $row; // Mengembalikan satu baris data sebagai array asosiatif
    }
    
}
?>
