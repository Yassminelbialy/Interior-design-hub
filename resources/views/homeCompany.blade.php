@extends('layouts.app')

@section('content')

@if ($errors->any())



@foreach ($errors->all() as $error)
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> You should check in on some of those fields below. for {{$error}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
           @endforeach


@endif
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif

<script>
    quiz_id = {{$company}}
</script>




@component('components.loading')
@endcomponent


@component('components.header',['contact' => $contact ,'slide_img'=>$slider_projcts])
@endcomponent



@component('components.all_services',['services' => $services ])
@endcomponent

@component('components.statitics')
@endcomponent


@component('components.projects',['projects'=>$projects])
@endcomponent


@component('components.services')
@endcomponent

 @component('components.3d_projects')
@endcomponent 

@component('components.video',['ceoInfo' => $ceoInfo])
@endcomponent
@component('components.quiz_tabs')
@endcomponent

@component('components.information_plus')
@endcomponent

@component('components.details')
@endcomponent

@component('components.testimonial',['reviews' => $reviews])
@endcomponent


@component('components.contact',['contact' => $contact,'ceoInfo' => $ceoInfo])
@endcomponent 

{{-- @component('components.matterport')

@endcomponent --}}

@component('components.map')

@endcomponent 

@component('components.footer')
@endcomponent



@endsection
@section('title')
{{'interior design'}}
@endsection
