@extends('layouts.app')

@section('content')
<div class="portfolio_wrapper">
    @include('sections.header')

    <section class="section_portfolio">
        <div class="container">
            <div class="top_line_developments">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top_line_description inner_title" data-aos="fade-right" data-aos-delay="300">
                            <h2 class="top_ttle">Портфолио</h2> </div>
                    </div>
                </div>
            </div>
            <div class="agancy_nav_mnu">
                <div class="row">
                    <div class="col-md-12">
                        <ul> </ul>
                    </div>
                </div>
            </div>
        </div>
        @livewire('projects-component')
    </section>
    @include('sections.form')
</div> 
@endsection