        function getRandomColor() {
            var letters = '0123456789ABCDEF'.split('');
            var color = '#';
            for(var i = 0; i < 6; i++) {

                color += letters[Math.round(Math.random() * 15)];

            }
            return color;
        }


        var clickedTime; var createdTime; var reactionTime;

        appear();

        document.getElementById("box").onclick=function(){
            clickedTime = Date.now();

            reactionTime = (clickedTime-createdTime)/1000;

            document.getElementById("time").innerHTML=reactionTime;

            this.style.display="none";

            appear();
        }

        function appear () {

            if(Math.random() > 0.5) {
                document.getElementById("box").style.borderRadius = "100px";
            } else {
                document.getElementById("box").style.borderRadius = "0px";
            }

            document.getElementById("box").style.top=(Math.random()*300)+"px";

            document.getElementById("box").style.left=(Math.random()*300)+"px";

            document.getElementById("box").style.backgroundColor = getRandomColor();

            setTimeout(function() {
                document.getElementById("box").style.display="block";
                createdTime = Date.now();
            }, Math.floor(6000 * Math.random()));

        }