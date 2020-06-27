<?php
require_once('./Form.php');
$form = new Form();
$requirement = [
    'email' => "email, required",
    'password' => "min7"
];

$form->run($_POST, $requirement, function(array $response) {
    global $form;
    if(count($response) > 0) {
        $form->response(0, "", $response);
    } else {
        $form->response(1, "Terjadi sesuatu!", []);
    }
});
?>

<?php
    /* Kode di atas akan menghasilkan respon JSON dengan format di bawah ini.

    // Respon JSON yang sukses adalah:
        {
            "error": 0,
            "message": "",
            "details": [{
                "email": "user@email.com",
                "id": 1
            }]
        }

    // Respon JSON yang gagal adalah:
        {
            "error": 1,
            "message": "Alamat email harus valid",
            "details": []
        }

    // Respon JSON yang gagal adalah:
        {
            "error": 1,
            "message": "Password minimum 7 karakter",
            "details": []
        }
    */
?>