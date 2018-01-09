@include('header')
<div id="page-wrapper" >
 <div id="page-inner">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">


                <div class="panel-heading">Confermer votre mot de passe</div>
                <div class="panel-body">
                    <div class="col-md-offset-2 col-md-9">
                             <span class="help-block">
                                        <strong>Bonjour Mme/Mr {{ $nom }} {{ $prenom }}, c'est ton premier pas à votre espace <br> veuillez Confirmer votre mot de passe</strong>
                                    </span>
                                    </div>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
                          
                            <div class="col-md-6">
                                <input type="hidden" class="form-control" name="nom" value="{{ $nom }}">

                                @if ($errors->has('nom'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('prenom') ? ' has-error' : '' }}">
                          

                            <div class="col-md-6">
                                <input type="hidden" class="form-control" name="prenom" value="{{ $prenom }}">

                                @if ($errors->has('prenom'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('prenom') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                           

                            <div class="col-md-6">
                                <input type="hidden" class="form-control" name="email" value="{{ $EmailE }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Mot de passe</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Confirmer mot de passe</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-danger square-btn-adjust">
                                    <i class="fa fa-btn fa-user"></i> Enregistrer
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
         </div>
    </div>
  </div>
</div>
</div>

