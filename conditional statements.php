<?php



$N = intval(trim(fgets(STDIN)));
if($N % 2 !=0){
print "Weird";  
}
else {
    if($N>=2 && $N<=5|| $N>20){
        print "Not Weird";
    }
    else{
        print "Weird";
    }
    
}