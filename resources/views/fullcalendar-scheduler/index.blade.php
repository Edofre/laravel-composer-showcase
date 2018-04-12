@extends('layouts.app')

@php
    $title = 'Fullcalendar Scheduler';
@endphp

@section('title')
    {{ $title }}
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            {{ $title }}
        </div>
        <div class="card-body">
            {!! $calendar->generate() !!}
        </div>
    </div>
@endsection

@push('scripts')

@endpush