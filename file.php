 <?php
        $fname = "testfile.txt";
        $han = fopen($fname,"r");

       echo $han."<br><br/>";

        if($han){
            //$cont = nl2br( fread($han,filesize("testfile.txt")));
            //while(!feof($han)){
            for($i = 0;$i<5;$i++){

                $line = nl2br(fgets($han));
                echo $line;
            }
            
            fclose($han);
            
        }
       

 ?>