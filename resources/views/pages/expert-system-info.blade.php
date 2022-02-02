@extends('layouts.app')

@section('content')
    <style>
        #showcase {
            position: relative;
            background: url('{{ asset('images/image7.jpg') }}');
            background-position: center;
            min-height: 60vh;
            margin-bottom: 2rem;
        }

        #showcase .primary-overlay {
            position: absolute;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.5);
            width: 100%;
            height: 100%;
        }

    </style>

    <!-- ShowCase  -->
    <header id="showcase">
        <div class="primary-overlay text-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 text-left">
                        <h1 class="display-3" style="margin-top: 6rem">Ranked Project</h1>
                        <p class="lead">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, voluptas.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="container">

        <div class="text-center mb-4">
            <h3 class="mb-3">Expert System Info (comming soon)</h3>
            <hr class="mb-4 mt-0 d-inline-block mx-auto w-50 bg-primary" style="height: 2px" />
        </div>
    </section>
@endsection
