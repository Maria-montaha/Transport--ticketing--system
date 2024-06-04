<x-user-layout>
    {{-- carousel --}}
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class=""
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active"
                aria-current="true"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('assets/img/bus/50.jpg') }}" class="d-block w-100 me-3" alt="...">
                    <img src="{{ asset('assets/img/bus/50.jpg') }}" class="d-block w-100" alt="...">
                </div>

                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>New way</h1>
                        <p class="opacity-75">Experiance New exploser </p>
                        <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item active carousel-item-start">

                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('assets/img/bus/56.jpg') }}" class="d-block w-100 me-3" alt="...">
                    <img src="{{ asset('assets/img/bus/56.jpg') }}" class="d-block w-100" alt="...">
                </div>


                <div class="container">
                    <div class="carousel-caption">
                        <h1>New way</h1>
                        <p class="opacity-75">Experiance New exploser </p>
                        <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item carousel-item-next carousel-item-start">


                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('assets/img/bus/51.jpg') }}" class="d-block w-100 me-3" alt="...">
                    <img src="{{ asset('assets/img/bus/51.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>New way</h1>
                        <p class="opacity-75">Experiance New exploser </p>
                        <p><a class="btn btn-lg btn-primary" href="#"></a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- carousel end --}}
    {{-- couresel 2 --}}
    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <img src="{{ asset('assets/img/bus/1.jpg') }}" class="rounded-circle" alt="Generic placeholder image">
                <h2 class="fw-normal">Luxary Bus</h2>
                <p>Some representative placeholder content for the three columns of text below the carousel. This is the
                    first column.</p>
                <p><a class="btn btn-secondary" href="#">View details »</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="{{ asset('assets/img/bus/3.jpg') }}" class="rounded-circle" alt="Generic placeholder image">
                <h2 class="fw-normal">AC Bus</h2>
                <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second
                    column.</p>
                <p><a class="btn btn-secondary" href="#">View details »</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="{{ asset('assets/img/bus/4.jpg') }}" class="rounded-circle" alt="Generic placeholder image">
                <h2 class="fw-normal">Non AC Bus</h2>
                <p>And lastly this, the third column of representative placeholder content.</p>
                <p><a class="btn btn-secondary" href="#">View details »</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span
                        class="text-body-secondary">It’ll blow your mind.</span></h2>
                <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting
                    prose here.</p>
            </div>
            <div class="col-md-5">
                <img src="{{ asset('assets/img/bus/21.jpg') }}"
                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                    alt="Generic placeholder image">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. <span
                        class="text-body-secondary">See for yourself.</span></h2>
                <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of
                    how this layout would work with some actual real-world content in place.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="{{ asset('assets/img/bus/12.jpg') }}"
                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                    alt="Generic placeholder image">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">And lastly, this one. <span
                        class="text-body-secondary">Checkmate.</span></h2>
                <p class="lead">And yes, this is the last block of representative placeholder content. Again, not
                    really intended to be actually read, simply here to give you a better view of what this would look
                    like with some actual content. Your content.</p>
            </div>
            <div class="col-md-5">
                <img src="{{ asset('assets/img/bus/13.jpg') }}"
                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                    alt="Generic placeholder image">
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. <span
                        class="text-body-secondary">See for yourself.</span></h2>
                <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of
                    how this layout would work with some actual real-world content in place.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="{{ asset('assets/img/bus/24.jpg') }}"
                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                    alt="Generic placeholder image">
            </div>
        </div>

        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">And lastly, this one. <span
                        class="text-body-secondary">Checkmate.</span></h2>
                <p class="lead">And yes, this is the last block of representative placeholder content. Again, not
                    really intended to be actually read, simply here to give you a better view of what this would look
                    like with some actual content. Your content.</p>
            </div>
            <div class="col-md-5">
                <img src="{{ asset('assets/img/bus/25.jpg') }}"
                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                    alt="Generic placeholder image">
            </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div>
</x-user-layout>
