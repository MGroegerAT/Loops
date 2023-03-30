<?php

class JSONView
{
    public function output($resultArray)
    {
        header("Content-Type: application/json");
        echo json_encode($resultArray);
    }
}