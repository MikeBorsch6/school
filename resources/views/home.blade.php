@extends('layouts.home')
@section('content')
    <div class="slideshow-container">
        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="{{asset('/images/student1.png')}}" style="width:100%">
        </div>
        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="{{asset('/images/student2.png')}}" style="width:100%">
        </div>
        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="{{asset('/images/student3.png')}}" style="width:100%">
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <div>
        <div class = "president">
            <div class="title">
                Learn about our efforts against Covid
            </div>
            <div class ="presimg">A word from our President:<p style="float: left;"><img src="/images/ceotest2.png" height="200px" width="200px" border="1px"></p></div>
            <div>
                <p>"During times of loss and distance learning, we are determined to help our students with the resources our school has available. We never want them to lose hope in their future."</p>
            </div>
        </div>
    </div>

    <div>
        <div class = "nasapanel">
            <div class="title">
                Our Partnership with NASA
            </div>
            <div class ="presimg"><img src="/images/logonasa.png"><p style="float: right;"><img src="/images/nasa.png" height="200px" width="200px" border="1px"></p></div>
            <div>
                <p>As NASA continues to push the boundaries of exploration further into space than ever before, the agency is looking to the next generation to join STEM fields. Students interested in science, technology, engineering and mathematics-focused careers can engage in educational opportunities at Saturn University.</p>
            </div>
        </div>
    </div>

    <div>
        <div class = "aboutus">
            <div class="title">
                About Saturn University
            </div>
            <div class ="presimg"><p style="float: right;"><img src="/images/school3.png" height="200px" width="300px" border="1px"></p></div>
            <div>
                <p>Saturn University is a dynamic and diverse STEM focused college that fosters academic excellence through close interaction among students, faculty and staff. Saturn University weaves the values of integrity, community engagement, and global citizenship into the fabric of its academic programs and campus life. In an environment that cultivates critical thinking, empathy, creativity and intercultural understanding, we endeavor to stimulate a passion for learning and a commitment to building a more just and sustainable world. Mission.</p>
            </div>
            <div><p style="float: right;"><img src = "/images/school1.png" height="200px" width="300px" border = "1px"></p></div>

        </div>
    </div>

    </body>
@endsection

@section('scripts')
            <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
            showSlides(slideIndex += n);
        }

            function currentSlide(n) {
            showSlides(slideIndex = n);
        }

            function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
            for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
        }
    </script>
@endsection
