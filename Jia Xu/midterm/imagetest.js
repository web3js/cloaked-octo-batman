var penguin=document.getElementById('penguin');
    penguin.addEventListener('click',function(){
       var addImage=document.getElementById("image");
       var image = document.createElement('img');
        image.src = "images/penguin.png";
        
        addImage.appendChild(image);
        

    },false)