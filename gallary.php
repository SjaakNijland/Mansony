
<body>
    <div id="wrapper" class="masonry-wrapper">

    <div id="gallery"  class="masonry">

        <div class="item"><img src="./img/15.jpg"></div>
        <div class="item"><img src="./img/16.jpg"></div>
        <div class="item"><img src="./img/17.jpg"></div>
        <div class="item"><img src="./img/18.jpeg"></div>
        <div class="item"><img src="./img/19.jpeg"></div>
        <div class="item"><img src="./img/20.jpg"></div>
        <div class="item"><img src="./img/21.jpg"></div>
        <div class="item"><img src="./img/22.jpg"></div>
        <div class="item"><img src="./img/23.jpg"></div>
        <div class="item"><img src="./img/1.jpg"></div>
        <div class="item"><img src="./img/2.jpg"></div>
        <div class="item"><img src="./img/3.jpg"></div>
        <div class="item"><img src="./img/4.png"></div>
        <div class="item"><img src="./img/5.jpg"></div>
        <div class="item"><img src="./img/6.jpg"></div>
        <div class="item"><img src="./img/7.jpg"></div>
        <div class="item"><img src="./img/8.jpg"></div>
        <div class="item"><img src="./img/9.jpg"></div>
        <div class="item"><img src="./img/10.jpg"></div>
        <div class="item"><img src="./img/11.jpg"></div>
        <div class="item"><img src="./img/12.jpg"></div>
        <div class="item"><img src="./img/13.jpg"></div>
        <div class="item"><img src="./img/14.jpg"></div>
        </div>
    </div>
    <script>
        function fixGalleryHeight()
        {
            var wrapper=document.getElementById("wrapper");
            var gallery=document.getElementById("gallery");
            var bounds=gallery.getBoundingClientRect();
            wrapper.style.height=bounds.height;
            var all_elements=gallery.getElementsByClassName("item");
            console.log(all_elements);
            var kolommen={};
            for(var i=0;i<all_elements.length;i++)
            {
                var el=all_elements[i];
                var b=el.getBoundingClientRect();
                var y= b.top+ b.height; // hoogte element op pagina.
                var x= b.left;
                var kolomnaam="kolom"+x;
                if(typeof(kolommen[kolomnaam])!="undefined") {
                    if(kolommen[kolomnaam]<y)
                    {
                        kolommen[kolomnaam]=y;
                    }
                }else {
                    kolommen[kolomnaam] = y;
                }
            }
            var min_height=1000000;
            for(all in kolommen)
            {
                if(kolommen[all]<min_height) min_height=kolommen[all];
            }
            wrapper.style.height=min_height;
            console.log(JSON.stringify(kolommen));
        }
        window.addEventListener("resize",fixGalleryHeight);
        window.addEventListener("load",fixGalleryHeight);
    </script>
</body>

