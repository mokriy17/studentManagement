@extends('layout')
@section('content')


    <div class="card">
        <div class="card-header">Courses Page</div>
        <div class="card-body">


            <div class="card-body">
                <h5 class="card-title">Name : {{ $teachers->name }}</h5>
                <p class="card-text">Syllabus : {{ $teachers->Syllabus }}</p>
                <p class="card-text">Duration : {{ $teachers->duration }}</p>
            </div>

            </hr>

        </div>
    </div>
@endsection
