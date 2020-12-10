<?php

function fecha_formato($date){
    return date("d/m/Y", strtotime($date));
}