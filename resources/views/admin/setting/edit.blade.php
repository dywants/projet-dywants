@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Editer Parametres</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('website') }}">Accueil</a></li>
                        <li class="breadcrumb-item active">Editer Parametres</li>
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
                                <h3 class="card-title">Editer Parametres du site </h3>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-12 col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                                    <div class="card-body">
                                        <form action="{{ route('setting.update') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @include('includes.errors')
                                            <div class="form-group">
                                                <label for="name">Nom du site</label>
                                                <input type="name" name="name" value="{{ $setting->name }}" class="form-control" placeholder="Enter name">
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="facebook">Facebook</label>
                                                        <input type="facebook" name="facebook" value="{{$setting->facebook }}" class="form-control" placeholder="Url facebook">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="linkedin">Linkedin</label>
                                                        <input type="linkedin" name="linkedin" value="{{$setting->linkedin }}" class="form-control" placeholder="Url Linkedin">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="instagram">Instagram</label>
                                                        <input type="instagram" name="instagram" value="{{$setting->instagram }}" class="form-control" placeholder="Url instagram">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="youtube">Youtube</label>
                                                        <input type="youtube" name="youtube" value="{{$setting->youtube }}" class="form-control" placeholder="Url Youtube">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="reddit">Github</label>
                                                        <input type="github" name="github" value="{{ $setting->github }}" class="form-control" placeholder="github url">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="email" name="email" value="{{ $setting->email }}" class="form-control" placeholder="email url">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="copyright">Copyright</label>
                                                        <input type="copyright" name="copyright" value="{{ $setting->copyright }}" class="form-control" placeholder="copyright">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="email">Numero de telephone</label>
                                                        <input type="text" name="phone" value="{{ $setting->phone }}" class="form-control" placeholder="phone number">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="address">Localisation</label>
                                                        <textarea name="address" id="address" class="form-control" rows="1" placeholder="enter address">{{ $setting->address}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-8">
                                                        <label for="logo">Logo site</label>
                                                        <div class="custom-file">
                                                            <input type="file" name="site_logo" class="custom-file-input" id="logo">
                                                            <label class="custom-file-label" for="logo">Choose file</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-4 text-right">
                                                        <div
                                                            style="max-width: 100px; max-height: 100px;overflow:hidden; margin-left: auto">
                                                            <img src="{{ asset($setting->site_logo) }}" class="img-fluid" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Site Description</label>
                                                <textarea name="description" id="description" rows="3" class="form-control" placeholder="Enter description">{{ $setting->description }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-lg btn-primary">Enregistrer</button>
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
    </div>
@endsection
