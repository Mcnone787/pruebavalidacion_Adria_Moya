<?php

namespace Daw;

class Users
{

    public $sql;

    public function __construct($sql)
    {

        $this->sql = $sql;

    }

  

    public function register($nombre, $apellido,$email, $fechanacimiento,$imagen,$pdf)
    {
        $stm = $this->sql->prepare('INSERT INTO participantes (nombre, apellidos,email, fecha_nacimento,imagensrc,srcpdf) values (:nombre, :apellidos, :email, :fecha_nacimento,:imagensrc,:srcpdf);');
        $stm->execute([':nombre' => $nombre, ':apellidos' => $apellido, ':email'=>$email,':fecha_nacimento' => $fechanacimiento,':imagensrc' => $imagen,':srcpdf' => $pdf]);
    }
    public function utlimoparticipante()
    {

        $stm = $this->sql->prepare('select * from participantes order by codigo desc limit 1;');
        $stm->execute();
        $participante = $stm->fetch(\PDO::FETCH_ASSOC);

        return $participante;
    }
  
    public function getAll()
    {

        $stm = $this->sql->prepare("select * from participantes");
        $stm->execute();

        $tasks = array();

        while ($task = $stm->fetch(\PDO::FETCH_ASSOC)) {
            $tasks[] = $task;
        }

        return $tasks;
    }
  
}