<?php
/**
 * Created by PhpStorm.
 * User: abhisheksubedi
 * Date: 8/19/2016
 * Time: 3:39 AM
 */
        ?>
@extends('layouts.backendlayouts.backendlayout')

@section('content')

    <div class="box box-info">
        <div class="box-header">
            {{--<i class="fa fa-envelope"></i>--}}

            <h3 class="box-title">Update Slider</h3>
            <!-- tools box -->
            <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
            <!-- /. tools -->
        </div>
        <div class="box-body">

            <form method="post" action="{{url('/admin/home/slider/'.$slider['id'])}}" enctype="multipart/form-data">

                <div class="form-group">
                    <input type="text" class="form-control" name="caption" value="{{$slider['caption']}}"/>
                </div>

                <div class="form-group">
                    <img src="{{URL::asset('uploads/image/'.$slider['image'])}}" width="250px" height="250px" alt="{{$slider['image']}}" >
                </div>

                <div class="form-group">
                    <input type="file" class="form-control" name="image" placeholder="Image">
                </div>
                <input type="hidden" name="_method" value="put"/>
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div>
                    <input class="btn btn-success" type="submit" value="Update"/>
                </div>
            </form>
        </div>

    </div>

@endsection


