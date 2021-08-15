        var start = new Date().getTime();
        
        function DisappearingShape() {
            
            var lenghtRandom = Math.random() * 600;
            
            var widthRandom = (Math.random() * 20) * 20;
            
            var colorRandom = "#" + ((1<<24)*Math.random() | 0).toString(16);
            
            if(Math.random() > 0.5){
                
                document.getElementById("container").style.borderRadius = "50%";
                
            }else {
                
                document.getElementById("container").style.borderRadius = "0";
                
            }
            
            document.getElementById("container").style.top = lenghtRandom;
            
            document.getElementById("container").style.left = lenghtRandom;
            
            document.getElementById("container").style.width = widthRandom;
            
            document.getElementById("container").style.height = widthRandom;
            
            document.getElementById("container").style.backgroundColor = colorRandom;

            document.getElementById("container").style.display = "block";
            
            start = new Date().getTime();
            
            }
        
        function makeShapeDelay(){
            
            setTimeout(DisappearingShape, Math.random() * 2000);
            
        }
        
        makeShapeDelay();
        
        document.getElementById("container").onclick = function(){
            
            var end = new Date().getTime();
            
            var timer = (end - start) / 1000;
            
            document.getElementById("timer").innerHTML =" " + timer + " s";
            
            document.getElementById("container").style.display = "none";
            
            makeShapeDelay();
            
            var myArray = new Array();
            
            var times = myArray.push(timer);
            
            for ( i = 0; i < myArray.length; i++) {
                
                times += myArray(i);
                
                calculateAverage(myArray);
  
            document.getElementById("avarageTime").innerHTML =" " + calculateAverage(myArray) + " s";
                
            }
            
            }
        
        function calculateAverage(array) {
                
                var total = 0;
                var count = 0;

                array.forEach(function(item, index) {
                    total += item;
                    count++;
                });

                return total / count;
            }