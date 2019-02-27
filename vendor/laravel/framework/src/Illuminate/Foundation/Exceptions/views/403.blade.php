@extends('errors::illustrated-layout')

@section('code', '403')
@section('title', __('Forbidden'))

@section('image')
<div style="background-image: url('/assets/img/Intersalud_del_valle_img.png');" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
</div>
@endsection

@section('message', __('Lo sentimos, No tienes permitido el acceso a esta pagina.'))
