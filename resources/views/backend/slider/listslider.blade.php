<?php
/**
 * Created by PhpStorm.
 * User: abhisheksubedi
 * Date: 8/19/2016
 * Time: 3:25 AM
 */

        ?>

@extends('layouts.backendlayouts.backendlayout')
@section('content')

    <div class="box box-info">
        <div class="box-header">
            {{--<i class="fa fa-envelope"></i>--}}

            <h3 class="box-title">Sliders</h3>
            <!-- tools box -->
            <div class="pull-right box-tools">
                <a href="{{url('/admin/home/slider/create')}}" class="btn btn-success" role="button">New SetUp</a>
                <button type="button" class="btn btn-success" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
            <!-- /. tools -->
        </div>
        <div class="box-body">

            <div class="container">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Caption</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php $i=1 ?>
                    @foreach($listslider as $slider)
                        <tr>
                            <td>{{$i}}</td>
                            <?php $i++ ?>
                            <td>{{$slider['caption']}}</td>
                            <td><img src="{{URL::asset('uploads/image/'.$slider['image'])}}" height="40"
                                     width="60">
                            </td>
                            <td>
                                <a href="{{url('/admin/home/slider/'.$slider['id'].'/edit')}}" class="btn btn-primary" role="button">Edit</a>
                                <a href="{{url('/admin/home/slider/delete/'.$slider['id'])}}" class="btn btn-danger" role="button">Delete</a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </div>




@endsection

