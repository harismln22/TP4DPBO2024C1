<?php
include_once("models/Template.php");

    class IndexView{
        public function render($data)
        {
            $no = 1;
            $dataMember = null;
            foreach($data as $val){
                list($id, $nama, $email, $phone, $date) = $val;
                $dataMember .= "<tr>
                <th>" . $no++ . "</th>
                <td>" . $nama . "</td>
                <td>" . $email . "</td>
                <td>" . $phone . "</td>
                <td>" . $date. "</td>
                <td>
                    <a class='btn btn-success' href='edit.php?id_edit=" . $id. "'>Edit</a>
                    <a class='btn btn-danger' href='delete.php?id_hapus=" . $id. "'>Delete</a>
                </td>
                </tr>";
            }
            $change = new Template("templates/index.html");
            $change->replace("ISI_TABEL", $dataMember);
            $change->write();
        }
    }
?>

