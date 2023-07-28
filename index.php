<?php

class Peserta {
    protected     $NIK, 
                  $nama, 
                  $JenisKelamin, 
                  $Usia,
                  $Alamat;
    
  
                  public function __construct( $NIK = "NIK", $Nama  = "Nama ", $Jenis_Kelamin = "Jenis Kelamin", $Usia = "Usia", $Alamat="Alamat" ) {
                      $this->NIK = $NIK;
                      $this->Nama  = $Nama ;
                      $this->Jenis_Kelamin = $Jenis_Kelamin;
                      $this->Usia = $Usia;
                      $this->Alamat = $Alamat;
                  }
              
                  public function setNIK( $NIK ) {
                      $this->NIK = $NIK;
                  }
              
                  public function getNIK() {
                      return $this->NIK;
                  }
              
                  public function setnama ( $nama  ) {
                      $this->nama  = $nama ;
                  }
              
                  public function getnama () {
                      return $this->nama ;
                  }
              
                  public function setJenisKelamin( $Jenis_Kelamin ) {
                      $this->JenisKelamin = $Jenis_Kelamin;
                  }
              
                  public function getJenisKelamin() {
                      return $this->JenisKelamin;
                  }
              
                  public function setUsia( $Usia ) {
                      $this->Usia = $Usia;
                  }
              
                  public function getUsia() {
                      return $this->Usia;
                  }
                  public function setAlamat( $Alamat ) {
                    $this->Alamat = $Alamat;
                }
            
                public function getAlamat() {
                    return $this->Alamat;
                }
                  
          
   }
      
  
              
  class Vaksin extends Peserta{
      public  $nama_Vaksin , $Dosis ;
      
      function InputVaksin (){
              echo "<br>Nama Vaksin      :     $this->nama_Vaksin " ;
              echo "<br>Dosis            :     $this->Dosis  ";
      }
  }
  
  class StatusVaksin extends Peserta{
      public $tempat , $tgl1 , $tgl2;
      
      function InputStatusVaksin(){
  echo "<br>NIK                 : $this->NIK";
  echo "<br>Nama                : $this->nama"; 
  echo "<br>Jenis Kelamin       : $this->JenisKelamin";
  echo "<br>Usia                : $this->Usia"; 
  echo "<br>Alamat              : $this->Alamat</br>";
                                                  
  echo "<br>Nama Vaksin         : $this->nama_Vaksin " ;
  echo "<br>Dosis               : $this->Dosis   ";
  echo "<br>Tempat Vaksin       : $this->tempat  ";
  echo "<br>Tanggal Vaksin      : $this->tgl1 " ;
  echo "<br>Jadwal Vaksin Kedua : $this->tgl2 </BR>";
  echo "<br>Klik link untuk mencetak Sertifikat :";
  echo '<a href="https://www.pedulilindungi.id/periksa-sertifikat">Cek Sertifikat</a>';
      }
  }

  echo "<center><table width = 500 border =3>
  <td><b><center>Surat Keterangan Vaksinasi</b></td>
  <td class=tg-im3k class=tg-0pky rowspan=2><b><center><img src=pedulilindungi.jpg height=70px width=70px> </center></b></td>
  <tr>
  <td><b><center>Covid-19</b></td>
  <tr>
  <td><b><center>Puskesmas Manonjaya</b></td>
  <td><b><center><font color=blue>PeduliLindungi</b></td>
  </tr>
  </tr>
  </table>";


$objborpas = new StatusVaksin();
$objborpas ->setNIK ("33892049580002");
$objborpas ->setNama      ("Ropac");
$objborpas ->setJenisKelamin    ("Laki-Laki");
$objborpas ->setUsia      ("20 ");
$objborpas ->setAlamat     ("Kec. Manonjaya<br>");
$objborpas ->nama_Vaksin    = "Sinovac-Biofarma";
$objborpas ->Dosis       = "Pertama";
$objborpas ->tempat    = "Manonjaya-10220701";
$objborpas ->tgl1        = "20 Oktober 2021";;
$objborpas ->tgl2        = "20 November 2021";
$objborpas ->InputStatusVaksin();

echo"<center><pre><b>==================================================</center></b>";
echo"<center><pre><b>LAYANAN KONSUMEN Whatsapp 081110500567</b></pre></center>";
echo"<center><pre><b>CALL 199 - vaksin@pedulilindungi.id</b></pre></center>";
?> 
