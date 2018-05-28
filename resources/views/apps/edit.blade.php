@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="box">
                <div class="box-header">
                    <h2>Thêm App</h2>
                </div>
                <div class="box-divider m-0"></div>
                <div class="box-body">
                    <form id="form" data-plugin="parsley" data-option="{}" novalidate action="{{route('app.doedit', ['id' => $app->id])}}"
                          method="post">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Tên App</label>
                            <div class="col-sm-10">
                                <input name="name" type="text" class="form-control" id="name"
                                       value="{{$app->name}}" required/>
                                @if($errors->has('name'))
                                    <small id="error" class="form-text text-muted">{{$errors->first('name')}}</small>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="package" class="col-sm-2 col-form-label">Package</label>
                            <div class="col-sm-10">
                                <input name="package" type="text" class="form-control" id="package"
                                       value="{{$app->package}}" required/>
                                @if($errors->has('package'))
                                    <small id="error" class="form-text text-muted">{{$errors->first('package')}}</small>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="type" class="col-sm-2 col-form-label">Hệ điều hành</label>
                            <div class="col-sm-10">
                                <select name="type" class="custom-select w-100">
                                    <option value="android" @if($app->type == 'android') selected @endif>Android</option>
                                    <option value="ios" @if($app->type=='ios') selected @endif>iOS</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="version_name" class="col-sm-2 col-form-label">Version</label>
                            <div class="col-sm-10">
                                <input name="version_name" type="text" class="form-control" id="version_name"
                                       value="{{$app->version_name}}" required/>
                                @if($errors->has('version_name'))
                                    <small id="error" class="form-text text-muted">{{$errors->first('version_name')}}</small>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="version_code" class="col-sm-2 col-form-label">Version Code</label>
                            <div class="col-sm-10">
                                <input name="version_code" type="text" class="form-control" id="version_code"
                                       value="{{$app->version_code}}" required/>
                                @if($errors->has('version_code'))
                                    <small id="error" class="form-text text-muted">{{$errors->first('version_code')}}</small>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="admob_banner" class="col-sm-2 col-form-label">Admob banner</label>
                            <div class="col-sm-10">
                                <input name="admob_banner" type="text" class="form-control" id="admob_banner"
                                       value="{{$app->admob_banner}}" required/>
                                @if($errors->has('admob_banner'))
                                    <small id="error" class="form-text text-muted">{{$errors->first('admob_banner')}}</small>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="admob_interstitial" class="col-sm-2 col-form-label">Admob Interstitial</label>
                            <div class="col-sm-10">
                                <input name="admob_interstitial" type="text" class="form-control" id="admob_interstitial"
                                       value="{{$app->admob_interstitial}}" required/>
                                @if($errors->has('admob_interstitial'))
                                    <small id="error" class="form-text text-muted">{{$errors->first('admob_interstitial')}}</small>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="admob_video" class="col-sm-2 col-form-label">Admob Video</label>
                            <div class="col-sm-10">
                                <input name="admob_video" type="text" class="form-control" id="admob_video"
                                       value="{{$app->admob_video}}" required/>
                                @if($errors->has('admob_video'))
                                    <small id="error" class="form-text text-muted">{{$errors->first('admob_video')}}</small>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="unity_video" class="col-sm-2 col-form-label">Unity Video</label>
                            <div class="col-sm-10">
                                <input name="unity_video" type="text" class="form-control" id="unity_video"
                                       value="{{$app->unity_video}}" required/>
                                @if($errors->has('unity_video'))
                                    <small id="error" class="form-text text-muted">{{$errors->first('unity_video')}}</small>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="facebook_name" class="col-sm-2 col-form-label">Facebook name</label>
                            <div class="col-sm-10">
                                <input name="facebook_name" type="text" class="form-control" id="facebook_name"
                                       value="{{$app->facebook_name}}" required/>
                                @if($errors->has('facebook_name'))
                                    <small id="error" class="form-text text-muted">{{$errors->first('facebook_name')}}</small>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="facebook_app_id" class="col-sm-2 col-form-label">Facebook App Id</label>
                            <div class="col-sm-10">
                                <input name="facebook_app_id" type="text" class="form-control" id="facebook_app_id"
                                       value="{{$app->facebook_app_id}}" required/>
                                @if($errors->has('facebook_app_id'))
                                    <small id="error" class="form-text text-muted">{{$errors->first('facebook_app_id')}}</small>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="facebook_ads" class="col-sm-2 col-form-label">Facebook Ads</label>
                            <div class="col-sm-10">
                                <input name="facebook_ads" type="text" class="form-control" id="facebook_ads"
                                       value="{{$app->facebook_ads}}" required/>
                                @if($errors->has('facebook_ads'))
                                    <small id="error" class="form-text text-muted">{{$errors->first('facebook_ads')}}</small>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="startapp_id" class="col-sm-2 col-form-label">StartApp Id</label>
                            <div class="col-sm-10">
                                <input name="startapp_id" type="text" class="form-control" id="startapp_id"
                                       value="{{$app->startapp_id}}" required/>
                                @if($errors->has('startapp_id'))
                                    <small id="error" class="form-text text-muted">{{$errors->first('startapp_id')}}</small>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="interstitial" class="col-sm-2 col-form-label">Interstitial</label>
                            <div class="col-sm-10">
                                <select name="interstitial" class="custom-select w-100">
                                    <option value="admob" @if($app->interstitial == 'admob') selected @endif>Admob</option>
                                    <option value="facebook" @if($app->interstitial == 'facebook') selected @endif>Facebook</option>
                                    <option value="startapp" @if($app->interstitial == 'startapp') selected @endif>StartApp</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="video" class="col-sm-2 col-form-label">Video</label>
                            <div class="col-sm-10">
                                <select name="video" class="custom-select w-100">
                                    <option value="admob" @if($app->video == 'admob') selected @endif>Admob</option>
                                    <option value="facebook" @if($app->video == 'facebook') selected @endif>Facebook</option>
                                    <option value="unity" @if($app->video == 'unity') selected @endif>Unity</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rate" class="col-sm-2 col-form-label">Rate</label>
                            <div class="col-sm-10">
                                <input name="rate" type="text" class="form-control" id="rate"
                                       value="{{$app->rate}}" required/>
                                @if($errors->has('rate'))
                                    <small id="error" class="form-text text-muted">{{$errors->first('rate')}}</small>
                                @endif
                            </div>
                        </div>
                        <div class="text-center pt-2">
                            <button type="submit" class="btn primary">Sửa</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    @include('layouts.plugin.notify.script')
    <script>
        $(document).ready(function () {
            @if(session('success'))
            $.notify("Sửa app thành công", 'success');
            @endif
        });
    </script>
@endpush

@section('header')
    @include('layouts.header', ['title' => 'Danh sách', 'url' => route('app.index')])
@endsection

