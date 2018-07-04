@extends('admin.Layouts.Default')
@section('content')
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">
                Conversations
            </h1>
        </div>
        <div class="row row-cards">
            <!--<div class="row">-->
            <div class="col-lg-12">
                <form action="https://httpbin.org/post" method="post" class="card">
                    <div class="card-header">
                        <h3 class="card-title">Créer une conversation</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Nom du destinataire</label>
                                    <input type="text" class="form-control" name="example-text-input" placeholder="Text..">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Nom de l'expéditeur</label>
                                    <input type="text" class="form-control" name="example-text-input" placeholder="Text..">
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                       <span class="input-group-btn">
                                         <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                           <i class="fa fa-picture-o"></i> Choose
                                         </a>
                                       </span>
                                        <input id="thumbnail" class="form-control" type="text" name="filepath">
                                    </div>
                                    <img id="holder" style="margin-top:15px;max-height:100px;">
                                    <label class="form-label">Avatar du destinataire</label>
                                    <input type="text" class="form-control" name="example-disabled-input" placeholder="Disabled.." value="Well, she turned me into a newt." disabled="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Avatar de l'expéditeur</label>
                                    <input type="text" class="form-control" name="example-disabled-input" placeholder="Disabled.." value="Well, how'd you become king, then?" readonly="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <div class="d-flex">
                            <a href="javascript:void(0)" class="btn btn-link">Cancel</a>
                            <button type="submit" class="btn btn-primary ml-auto">Send data</button>
                        </div>
                    </div>
                </form>
            </div>
            <!--</div>-->
            <div class="col-lg-12">
                <div class="alert alert-primary">Conversations existantes.</div>
                <div class="row">
                    @foreach($data as $item)
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <a href="/admin/conversation/{{$item->slug}}">
                                    <h3 class="card-title">{{ $item->destinataire_name }}</h3>
                                </a>
                            </div>
                            <div class="card-body">
                                <span class="avatar avatar-xl" style="background-image: url({{ $item->destinataire_picture }})"></span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
