<?php
class InheritFromPhpArrayObject extends ArrayObject
{
    public function __set($key, $value)
    {
        $this[$key] = $value;
    }

    public function displayAsTable()
    {
        $table =  '<table>';
        $table .= '<tbody>';
        $array_data = (array) $this;
        foreach ($array_data as $key => $value) {
            $table .= '<tr>';
            $table .= '<td>' . $key . ': ------- ' . '</td>';
            $table .= '<td>' . $value . '</td>';
            $table .= '</tr>';
        }
        $table .= '</tbody>';
        $table .=  '</table>';
        return $table;
    }
}

$object = new InheritFromPhpArrayObject();
$object->Name = 'Shaon Ahmed';
$object->Gender = 'Male';
$object->Religion = 'Islam';
$object->City = 'Dhaka';
$object->Country = 'Bangladesh';

echo $object->displayAsTable();
