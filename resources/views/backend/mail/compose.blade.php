@extends('layouts.backendlayouts.backendlayout')
@section('content')
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Compose New Message</h3>
            </div>




            <!-- /.box-header -->
            <form method="post" action="{{url('/admin/mail/send')}}" role="form">
                {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <?php $user = Auth::user(); ?>
                        <input class="form-control" value="<?php echo $user->name ?>" name="name" placeholder="Name:">
                        @if ($errors->has('name'))
                            <span class="help-block alert-danger">
                            <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        @if(isset($mail))
                        <input class="form-control" value="{{$mail}}" name="email" placeholder="To:">
                                 @if ($errors->has('email'))
                            <span class="help-block alert-danger">
                            <strong>{{ $errors->first('email') }}</strong>
                            </span>
                                 @endif
                            @else
                            <input class="form-control" value="{{old('email')}}" name="email" placeholder="To:">
                            @if ($errors->has('email'))
                                <span class="help-block alert-danger">
                            <strong>{{ $errors->first('email') }}</strong>
                            </span>
                                @endif

                        @endif

                    </div>
                    <div class="form-group">
                        <input class="form-control" value="{{old('subject')}}" name="subject" placeholder="Subject:">
                        @if ($errors->has('subject'))
                            <span class="help-block alert-danger">
                            <strong>{{ $errors->first('subject') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                    <textarea id="compose-textarea" name="message" class="form-control" style="height: 300px" value="{{old('subject')}}">
                    </textarea>
                    </div>
                    {{--<div class="form-group">
                        <div class="btn btn-default btn-file">
                            <i class="fa fa-paperclip"></i> Attachment
                            <input type="file" name="attachment">
                        </div>
                        <p class="help-block">Max. 32MB</p>
                    </div>--}}
                </div>

            <!-- /.box-body -->
            <div class="box-footer">
                <div class="pull-right">
                    {{--<a type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Draft</a>--}}
                    <button type="submit" class="btn btn-primary"><i
                                class="fa fa-envelope-o"></i> Send</button>
                </div>
                {{--  <a type="reset" class="btn btn-default"><i class="fa fa-times"></i> Discard</a>--}}
            </div>
            </form>
            <!-- /.box-footer -->
        </div>

        <!-- /. box -->
    </div>
@endsection