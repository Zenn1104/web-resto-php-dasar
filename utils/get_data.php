<?php
    function get_data($file_path) {
            $json_data = file_get_contents($file_path);

            $data = json_decode($json_data, true);

            if($data === null) {
                echo "Tidak ada data";
                exit;
            }

            return $data;
        }