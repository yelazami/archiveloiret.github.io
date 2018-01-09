@include('header')
<div id="page-wrapper" >
 <div id="page-inner">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Se connecter</div>
                <div class="panel-body">
                @if(!empty($mes))
                <div class="alert alert-danger">
                  <button data-dismiss="alert" class="close" type="button">x</button>
                    {{ $mes }}
                    </div>
                    @endif
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/postLogin') }}">
                        {!! csrf_field() !!}
                        
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Adresse E-Mail </label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-danger square-btn-adjust">
                                    <i class="fa fa-btn fa-sign-in"></i> Suivant
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
</div>
@include('footer')
