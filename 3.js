function cetakBintang(angka){
    if(Number(angka) % 2!=0){
        var bintang = "";
        var angkaGanjil = false; 
        for(a = 0; a < angka; a++){
            if(Number(a) % 2!=0){
                angkaGanjil = true;
            } else {
                angkaGanjil =false;
            }
        
            for(b = 0; b < angka ; b++){
                if(angkaGanjil==true && b% 2!=0){
                    bintang = bintang+" = ";
                } else if(angkaGanjil==true && b% 2==0){
                    bintang = bintang+" * ";
                } else if(angkaGanjil==false && b% 2!=0) {
                    bintang = bintang+" * ";  
                } 
               
                else{
                    bintang = bintang+" = ";
                }
            }
            bintang = bintang + '\n';
        }
       
    } else {
        return "Input angka tidak ganjil";
    }
  return bintang;
}

function med(angka){
    arr = [];
    for(i =0;i<angka;i++){
        arr.push(i)
    }
    let hitungMedian = (angka-1)/2 + angka %2;
    return Median ;
}

console.log(cetakBintang(5));