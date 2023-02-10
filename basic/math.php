<?php
$numberGenerator = rand(100,999);
echo "<h1 id='random'> {$numberGenerator} </h1>";
echo "<button id='generator' onclick='numberGenerator()'>Number Generator</button>";


?>
<script>
    function numberGenerator(){
        
        location.reload();
        // color();
        console.log( val);
    }
        let random = document.getElementById('random')
        let val = random.innerHTML;
        if(parseInt(val) < 200){
            random.style.color = 'red';
        }
        else if(parseInt(val) > 200 && parseInt(val) < 400){
            random.style.color = 'blue';
        }
        else if(parseInt(val) > 400 && parseInt(val) < 700){
            random.style.color = 'salmon';
        }
        else {
            random.style.color = 'black';
        }
   

</script>