<?php

//Cette fonction permet à un utilisateur de créer un nouveau message et de l'envoyer à un destinataire spécifique.

function save_message($id_emetteur_message, $id_destinataire_message, $description_message) {
    global $conn;
    $date_message = date('Y-m-d H:i:s');
    $query = "INSERT INTO message (id_emetteur_message, id_destinataire_message, description_message, date_message) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'iiss', $id_emetteur_message, $id_destinataire_message, $description_message, $date_message);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

function get_user($id_emetteur_message, $id_destinataire_message)
{

    $query = "SELECT * FROM message JOIN client ON message.id_emetteur_message = client.id_client";


    //Cette fonction permet de récupérer la liste des messages envoyés par un utilisateur spécifique à un destinataire spécifique.

    function get_messages($id_emetteur_message, $id_destinataire_message)
    {
        global $conn;
        $query = "SELECT * FROM message WHERE (id_emetteur_messager_id = ? AND id_destinataire_message = ?) OR (sendeid_emetteur_messager_id = ? AND id_destinataire_message = ?) ORDER BY date_message DESC";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, 'iiii', $id_emetteur_message, $id_destinataire_message, $id_destinataire_message, $id_emetteur_message);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $id_message, $id_emetteur_message, $id_destinataire_message, $message, $date_message);
        $message = array();
        while (mysqli_stmt_fetch($stmt)) {
            $message[] = array(
                'id_message' => $id_message,
                'id_emetteur_message' => $id_emetteur_message,
                'id_destinataire_message' => $id_destinataire_message,
                'description_message' => $description_message,
                'date_message' => $date_message,
            );
        }
        mysqli_stmt_close($stmt);
        return $message;
    }

    //Cette fonction permet à un utilisateur de supprimer un message s'il le souhaite.

    function delete_message($id_message)
    {
        global $conn;
        $query = "DELETE FROM message WHERE id_message = ?";
        $stmt = mysqli_prepare($db, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id_message);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }

?>