@extends('layouts.backendlayouts.backendlayout')
@section('content')


    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Read Mail</h3>

                <div class="box-tools pull-right">
                    <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i
                                class="fa fa-chevron-left"></i></a>
                    <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i
                                class="fa fa-chevron-right"></i></a>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <div class="mailbox-read-info">
                    <h3>{{$mail['subject']}}</h3>
                    <h5>From: {{$mail['email']}}
                        <span class="mailbox-read-time pull-right">15 Feb. 2016 11:03 PM</span></h5>
                </div>
                <!-- /.mailbox-read-info -->
                <div class="mailbox-controls with-border text-center">
                    <div class="btn-group">
                        <a href="{{url('/admin/mail/delete/'.$mail['id'])}}" type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body"
                                title="Delete">
                            <i class="fa fa-trash-o"></i></a>
                        <a href="{{url('/admin/mail/mail/'.$mail['id'])}}" type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body"
                                title="Reply">
                            <i class="fa fa-reply"></i></a>
                        {{--<button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body"
                                title="Forward">
                            <i class="fa fa-share"></i></button>--}}
                        <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Print">
                            <i class="fa fa-print"></i></button>
                    </div>
                    <!-- /.btn-group -->

                </div>
                <!-- /.mailbox-controls -->
                <div class="mailbox-read-message">
                    <p>{!! $mail['message'] !!}</p>
                </div>
                <!-- /.mailbox-read-message -->
            </div>
            <!-- /.box-body -->
            <!-- /.box-footer -->
            <div class="box-footer">
                <div class="pull-right">
                    <a type="button" href="{{url('/admin/mail/mail/'.$mail['id'])}}" class="btn btn-default"><i class="fa fa-reply"></i> Reply</a>
                </div>
                <button type="button" class="btn btn-default"><i class="fa fa-print"></i> Print</button>
            </div>
            <!-- /.box-footer -->
        </div>
        <!-- /. box -->
    </div>

@endsection