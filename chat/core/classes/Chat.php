<?php
class Chat extends Core{
    public function fetchMessages(){
        //query db
        $this->query("
        SELECT chat.message,nhanvien.position, nhanvien.fullname,nhanvien.id FROM chat JOIN nhanvien ON chat.id_emp= nhanvien.id ORDER BY chat.timestamp DESC

        ");
        // return rows
        return $this->rows(); 
    }

    public function throwMessage($id_emp, $message){
        //insert into db
        $this->query("
            INSERT INTO chat (id_emp, message)
            VALUES ('".$id_emp."','".$this->db->real_escape_string(htmlentities($message))."')"
        );
    }
}