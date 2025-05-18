@extends('wp-public.layouts.app')
@section('content')
<section class="page-section mt-5 pt-5 bg-light" id="team">
    <div class="container mt-5">
        <div class="text-center mt-5">
            <h2 class="section-heading">Our Amazing Team</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="{{ asset('themes/frontend/assets/img/team/1.jpg') }}"
                        alt="...">
                    <h4>Parveen Anand</h4>
                    <p class="text-muted">Lead Designer</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="{{ asset('themes/frontend/assets/img/team/2.jpg') }}"
                        alt="...">
                    <h4>Diana Petersen</h4>
                    <p class="text-muted">Lead Marketer</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="{{ asset('themes/frontend/assets/img/team/3.jpg') }}"
                        alt="...">
                    <h4>Larry Parker</h4>
                    <p class="text-muted">Lead Developer</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection