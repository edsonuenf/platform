@extends('dashboard::layouts.dashboard')

@section('title','Systems')
@section('description', 'Global for Systems')

@section('content')

<div class="bg-white">

    <div class="container wrapper-md">

        <div class="admin-wrapper">
             <div class="row">
                {!! Dashboard::menu()->render('Systems',' dashboard::partials.systems.systemsMenu') !!}
            </div>
        </div>

    </div>

</div>


@stop