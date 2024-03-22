@extends('layouts.landing')

@section('title', 'Courses')

@section('content')
    @include('courses._partials.navbar')
    <div class="bg-blue-500 max-w-screen-xl h-full mx-auto p-2">
        <div class="bg-red-500 flex flex-wrap md:gap-5">
            {{-- Filters --}}
            @include('courses._partials.filter-section')

            {{-- Courses --}}
            @include('courses._partials.courses-section')

        </div>
    </div>
@endsection


{{-- @component()
    @slot('', '')
@endcomponent --}}
