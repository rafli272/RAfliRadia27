<?php
class ahli_model
{
    private $ahli = [
        [
            "penulis" => "Teknik Konstuksi dan Perumahan(TKP)",
        ],
        [
            "penulis" => "Tekni Pemanasan Uadara Dan Pendinginan(TPTU)",
        ],
        [
            "penulis" => "Teknik Pengelasan(",
        ]
        ];
        public function getAllahli()
        {
            return $this->ahli;
        }
        public function tambahData($data)
        {
            $query = " INSET INTO siswa VALUES
            ('', :nama, :jenis_kelamin, ;NISN) ";
            $this->db->query($query);
            $this->db->bind('nama', $data['nama']);
            $this->db->query('jenis_kelamin', $data['jenis_kelamin']);
            $this->db->query('NISN', $data['NISN']);
            $this->db->execute();
           return $this->db->rowCount();



        }
}