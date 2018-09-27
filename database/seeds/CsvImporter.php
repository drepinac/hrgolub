<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CsvImporter
 *
 * @author darko.repinac
 */
class CsvImporter {
   private $fp;
    private $parse_header;
    private $header;
    private $delimiter;
    private $length;
    private $enclosure;
//    private $lines;
    //--------------------------------------------------------------------
    function __construct($file_name, $parse_header=false, $delimiter="\t", $length=1000)
    {
        $this->fp = fopen($file_name, "r");
        $this->parse_header = $parse_header;
        $this->delimiter = $delimiter;
        $this->length = $length;
//        $this->lines = $lines;

        if ($this->parse_header)
        {
           $this->header = fgetcsv($this->fp, $this->length, $this->delimiter);
        }

    }
    //--------------------------------------------------------------------
    function __destruct()
    {
        if ($this->fp)
        {
            fclose($this->fp);
        }
    }
    //--------------------------------------------------------------------
    function get($max_lines=0)
    {
        //if $max_lines is set to 0, then get all the data

        $data = array();
        static $brojac = 0;

        if ($max_lines > 0) {
        $line_count = 0;}
        else {
        $line_count = -1;} // so loop limit is ignored

        while ($line_count < $max_lines && ($row = fgetcsv($this->fp, $this->length, $this->delimiter)) !== FALSE)
        {
//            print_r($row);
//            break;
            if ($this->parse_header)
            {
                foreach ($this->header as $i => $heading_i)
                {
                    if (substr($heading_i,0,5) == 'DATUM'){
                        // ako se radi o datumskom polju
                        $row_new[$heading_i] = date_create_from_format('d.m.y', $row[$i]);
                    } else {
                        if (strspn($row[$i],"ABCČĆDĐEFGHIJKLMNOPQRSŠTUVZŽabcčćdđefghijklmnopqrsštuwzž")) {
                            // ako se radi o tekstnom polju
                            $row_new[$heading_i] = $row[$i];
                        } else {
                            if (stripos($row[$i],",") !== false) {
                                // ako se radi o decimalnom polju
                                $row_new[$heading_i] = str_replace("˙",".",str_replace(",",".", str_replace(".","˙",$row[$i]))) ;
                            } else {
                                // ako se radi o integer polju
                                $row_new[$heading_i] = empty(trim($row[$i])) ? 0 : trim($row[$i]);
//                                $row_new[$heading_i] = trim($row[$i]);
                            }
                        }
                    }
                }
                $data[] = $row_new;
            }
            else
            {
                $data[] = $row;
            }

            if ($max_lines > 0)
                $line_count++;
        }
        $brojac += $line_count;
//        echo $brojac.' ';
        return $data;
    } 
}
?>
