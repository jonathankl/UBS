<?php 
class Mpetugas extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getdatapetugas(){
        $jum = $this->db->query("select * from ed_petugas");
        return $jum; 

        // $jums = $jum->num_rows();
        // return $jums;
    }

    public function insertPetugas($id, $nama, $usere, $aktif, $jam_kerja, $jam_kerja_baru)
    {
        $sql = "insert into ed_petugas(petugas, nama_petugas, usere, aktif, jam_kerja, jam_kerja_baru) values('$id','$nama', '$usere', '$aktif', '$jam_kerja', '$jam_kerja_baru')";
        $this->db->query($sql); 
    }

    
    public function deletePetugas($Id){
        $sql = "delete from ed_petugas where petugas = '".$Id."'";
        $this->db->query($sql);
    }

    public function editPetugas($id, $nama, $usere, $aktif, $jam_kerja, $jam_kerja_baru){
        $sql = "";
    }
}
?>