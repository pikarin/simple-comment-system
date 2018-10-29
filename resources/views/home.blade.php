@extends('layouts.app')

@section('content')
<comments-manager
    :user="{{ auth()->user() }}"
/>
@endsection
