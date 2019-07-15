<?php

class Model_Asprak extends CI_Model
{


    public function asprakMatkul()
    {

        $nim = $this->session->userdata('nim');

        $queryMatkul = "SELECT `matkul`.`kodematkul`,`namamatkul`
                                        FROM `matkul` JOIN `asprak` 
                                        ON `matkul`.`kodematkul` = `asprak`.`kodematkul`
                                        WHERE `asprak`.`nim` = $nim
                                        AND `asprak`.`status` = 1
                                        ORDER BY `asprak`.`kodematkul` ASC";

        return $this->db->query($queryMatkul)->result_array();
    }
}
