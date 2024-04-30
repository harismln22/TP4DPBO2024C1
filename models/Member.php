<?php

class Member extends DB{

    function getMember()
    {
        $query = "SELECT * FROM members";
        return $this->execute($query);
    }

    function addMember($data)
    {
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $date = $data['date'];

        $query = "insert into buku values ('', '$name', '$email', '$phone', '$date')";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function delete($id)
    {

        $query = "delete FROM members WHERE id = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }

//     function edit($id)
//     {
//         // Mengeksekusi query
//         return $this->execute($query);
//     }
}