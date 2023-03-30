<?php
//! String to Array
$vegetables = explode(', ','brinjal, brocoli, carrot, capsicum');

//! Array to String
$vegetablesString = join(', ',$vegetables);
echo $vegetablesString;

