<?php

class Funciones
{

    /**
     * Encrypts a string using the specified algorithm.
     *
     * @param string $str The string to be encrypted.
     * @param string $algor The algorithm to be used for encryption. Default is 'sha512'.
     * @return string The encrypted string.
     */
    static public function encript($str, $algor = 'sha512')
    {
        return hash($algor, $str);
    }

    /**
     * Checks if a user is logged in.
     *
     * @param string $name The name of the session variable to check. Default is 'user'.
     * @param string $redirect The URL to redirect to if the user is not logged in. Default is 'home'.
     * @return bool Returns true if the user is logged in, otherwise redirects to the specified URL.
     */
    static public function isLogin($name = 'user', $redirect = 'home')
    {
        if (!isset($_SESSION[$name])) {
            header('location:' . $redirect);
        }

        return true;
    }


    /**
     * Formats a given date string according to the specified format.
     *
     * @param string $fecha The date string to be formatted.
     * @param string $formato The format to be applied to the date string. Default is 'd/m/Y'.
     * @return string The formatted date string.
     */
    static public function dateFormat($fecha, $formato = 'd/m/Y')
    {
        return date($formato, strtotime($fecha));
    }


    /**
     * Displays a SweetAlert2 popup with the provided data.
     *
     * @param array $datos The data for the SweetAlert2 popup.
     *                     The array should contain the following keys:
     *                     - 'icon': The icon to display in the popup.
     *                     - 'title': The title of the popup.
     *                     - 'text': The text content of the popup.
     *                     - 'redirect' (optional): The URL to redirect to after the popup is closed.
     * @return void
     */
    static public function sweetAlert2($datos)
    {
        ?>
        <script>
            console.log('alert');
            Swal.fire({
                icon: '<?= $datos['icon'] ?>',
                title: '<?= $datos['title'] ?>',
                text: '<?= $datos['text'] ?>',

            }).then((result) => {
                <?php
                if (isset($datos['redirect'])) {
                    ?>
                    window.location.href = "<?= $datos['redirect'] ?>";
                    <?php
                }
                ?>
            })
        </script>
        <?php
    }

    /**
     * Generates a random string of specified length.
     *
     * @param int $long The length of the random string to generate. Default is 10.
     * @return string The randomly generated string.
     */
    static public function RandomString($long = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randstring = '';
        for ($i = 0; $i < $long; $i++) {
            $randstring .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randstring;
    }

    /**
     * Translates a date string in the format "Month Day, Year" to the format "Year-Month-Day".
     *
     * @param string $date1 The date string to be translated.
     * @return string The translated date string in the format "Year-Month-Day".
     */
    static public function translateDatePicker($date1)
    {
        $meses = array("Enero," => 1, "Febrero," => 2, "Marzo," => 3, "Abril," => 4, "Mayo," => 5, "Junio," => 6, "Julio," => 7, "Agosto," => 8, "Septiembre," => 9, "Octubre," => 10, "Noviembre," => 11, "Diciembre," => 12);
        $fecha = explode(' ', $date1);
        $date = $fecha[0] . '-' . $meses[$fecha[1]] . '-' . $fecha[2];

        // var_dump($date);
        return $date;
    }

    /**
     * Redirects the user to a specified URL using JavaScript.
     *
     * @param string $ruta The URL to redirect to. Default is 'home'.
     * @return void
     */
    static function JsRedirect($ruta = 'home')
    {
        ?>

        <script>
            window.location.href = "<?= $ruta ?>";
        </script>


        <?php
    }

    /**
     * Uploads an image to the specified target directory.
     *
     * @param string $targetDir The target directory where the image will be uploaded.
     * @return string The filename of the uploaded image if successful, or 'default.png' if no image was uploaded.
     */
    static function uploadImage($targetDir)
    {
        if (isset($_FILES['img']) && $_FILES['img']['tmp_name'] != '') {
            $result = false;
            $msg = '';

            $fileName = Funciones::RandomString() . ".png";
            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

            // Verificar si el archivo es una imagen
            $allowTypes = array('jpg', 'jpeg', 'png', 'gif');
            if (in_array($fileType, $allowTypes)) {
                // Mover el archivo subido al directorio de destino
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $targetFilePath)) {
                    $result = true;
                } else {
                    $msg = "Hubo un error al subir el archivo.";
                }
            } else {
                $msg = "Solo se permiten subir archivos de imagen (jpg, jpeg, png, gif).";
            }

            if ($result) {
                Funciones::sweetAlert2(array("icon" => "success", 'title' => 'Imagen subida', 'text' => ''));
                return $fileName;
            } else {
                Funciones::sweetAlert2(array('icon' => 'error', 'title' => 'Datos incorrectos', 'text' => $msg));
            }
        } else {
            return 'default.png';
        }

        return 'default.png';
    }

    /**
     * Deletes an image file from the server.
     *
     * @param string $targetImg The path to the image file to be deleted.
     * @return bool Returns true if the image file was successfully deleted, false otherwise.
     */
    static function deleteImage($targetImg)
    {
        return unlink($targetImg);
    }

    /**
     * Deletes a folder and its contents.
     *
     * @param string $targetDir The path to the folder to be deleted.
     * @return bool Returns true on success, false on failure.
     */
    static function deleteFolder($targetDir)
    {
        return rmdir($targetDir);
    }
}
