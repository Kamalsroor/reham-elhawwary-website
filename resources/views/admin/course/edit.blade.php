@extends('admin.index')
	@section('content')
	<div class="row">
		<div class="col-md-12">
				<div class="widget-extra body-req portlet light bordered">
						<div class="portlet-title">
								<div class="caption">
										<span class="caption-subject bold uppercase font-dark">{{$title}}</span>
								</div>
								<div class="actions">
										<a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('course/create')}}"
												data-toggle="tooltip" title="{{trans('admin.add')}}  {{trans('admin.course')}}">
												<i class="fa fa-plus"></i>
										</a>
										<span data-toggle="tooltip" title="{{trans('admin.delete')}}  {{trans('admin.course')}}">
												<a data-toggle="modal" data-target="#myModal{{$course->id}}" class="btn btn-circle btn-icon-only btn-default" href="">
														<i class="fa fa-trash"></i>
												</a>
										</span>
										<div class="modal fade" id="myModal{{$course->id}}">
												<div class="modal-dialog">
														<div class="modal-content">
																<div class="modal-header">
																		<button class="close" data-dismiss="modal">x</button>
																		<h4 class="modal-title">{{trans('admin.delete')}}؟</h4>
																</div>
																<div class="modal-body">
																		<i class="fa fa-exclamation-triangle"></i>   {{trans('admin.ask_del')}} {{trans('admin.id')}} ({{$course->id}}) ؟
																</div>
																<div class="modal-footer">
																		{!! Form::open([
																		'method' => 'DELETE',
																		'route' => ['course.destroy', $course->id]
																		]) !!}
																		{!! Form::submit(trans('admin.approval'), ['class' => 'btn btn-danger']) !!}
																		<a class="btn btn-default" data-dismiss="modal">{{trans('admin.cancel')}}</a>
																		{!! Form::close() !!}
																</div>
														</div>
												</div>
										</div>
										<a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('course')}}"
												data-toggle="tooltip" title="{{trans('admin.show_all')}}   {{trans('admin.course')}}">
												<i class="fa fa-list"></i>
										</a>
										<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#"
												data-original-title="{{trans('admin.fullscreen')}}"
												title="{{trans('admin.fullscreen')}}">
										</a>
								</div>
						</div>
						<div class="portlet-body form">
								<div class="col-md-12">
										
{!! Form::open(['url'=>aurl('/course/'.$course->id),'method'=>'put','id'=>'course','files'=>true,'class'=>'form-horizontal form-row-seperated']) !!}
<div class="form-group">
    {!! Form::label('titel',trans('admin.titel'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('titel', $course->titel ,['class'=>'form-control','placeholder'=>trans('admin.titel')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('des',trans('admin.des'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('des', $course->des ,['class'=>'form-control ckeditor','placeholder'=>trans('admin.des')]) !!}
    </div>
</div>
<br>

<div class="form-group">
	{!! Form::label('mini_des',trans('admin.mini_des'),['class'=>'col-md-3 control-label']) !!}
	<div class="col-md-9">
			{!! Form::textarea('mini_des',$course->mini_des,['class'=>'form-control ','placeholder'=>trans('admin.mini_des')]) !!}
	</div>
</div>
<br>


<div class="form-group">
	{!! Form::label('photo',trans('admin.photo'),['class'=>'col-md-3 control-label']) !!}
	<div class="col-md-9">
			{!! Form::file('photo',['class'=>'form-control','placeholder'=>trans('admin.photo')]) !!}
			@if(!empty($course->photo))
			<img src="{{it()->url($course->photo)}}" style="width:150px;height:150px;" />
			@endif
	</div>
</div>
<br>



<div class="form-actions">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
{!! Form::submit(trans('admin.save'),['class'=>'btn btn-success']) !!}
         </div>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}

												</div>
												<div class="clearfix"></div>
								</div>
						</div>
				</div>
		</div>
		@stop
		
