@extends('layouts.app')

@section('template_title')
    {{ __('Afegir') }} Articles
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Afegir') }} Articles</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('articles.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('article.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection