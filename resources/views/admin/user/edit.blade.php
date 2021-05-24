@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Editer Utilisateur</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('website') }}">Accueil</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Liste des utilisateurs</a></li>
                        <li class="breadcrumb-item active">Liste des utilisateur</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="card-title">Editer Utilisateur - {{ $user->name }}</h3>
                                <a href="{{ route('user.index') }}" class="btn btn-primary">Revenir à la liste
                                    d'utilisateur</a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                                    <form action="{{ route('user.update', $user->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="card-body">
                                            @include('includes.errors')
                                            <div class="form-group">
                                                <label for="name">Nom utilisateur</label>
                                                <input type="name" name="name" class="form-control" id="name" placeholder="Enter name" value="{{ $user->name }} ">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email Utilisateur</label>
                                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="{{ $user->email }} ">
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Mot de passe utilisateur <small>(Enter
                                                        <passwor if you
                                                        want change.)</small></label>
                                                <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-lg btn-primary">Sauvegarder</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
