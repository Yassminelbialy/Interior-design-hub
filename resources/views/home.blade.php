@extends('layouts.app')

@section('content')


@component('components.loading')
@endcomponent


@component('components.header',['contact' => $contact])
@endcomponent

@component('components.who_us')
@endcomponent

@component('components.steps_working')
@endcomponent

@component('components.all_services')
@endcomponent

@component('components.statitics')
@endcomponent

@component('components.projects',['projects'=>$projects])
@endcomponent

@component('components.all_projects')
@endcomponent


@component('components.services')
@endcomponent

@component('components.3d_projects')
@endcomponent


@component('components.quiz_tabs')
@endcomponent

@component('components.information_plus')
@endcomponent

@component('components.our_team')
@endcomponent
@component('components.clients')
@endcomponent

@component('components.state')
@endcomponent

@component('components.video',['ceoInfo' => $ceoInfo])
@endcomponent

@component('components.details')
@endcomponent

@component('components.worldWide')
@endcomponent

@component('components.testimonial')
@endcomponent

@component('components.contact',['contact' => $contact,'ceoInfo' => $ceoInfo])
@endcomponent

@component('components.map')

@endcomponent

@component('components.footer')
@endcomponent


@endsection
