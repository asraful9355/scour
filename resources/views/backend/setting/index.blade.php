@extends('layouts.app2')
@section('admin')
<div class="container-fluid">
    <!-- DataTales Example -->
         <div class="row justify-content-center">
       			<div class="col-sm-11">
				    <div class="">
				    	<form method="post" action="{{ route('update.setting', $settings->id) }}" enctype="multipart/form-data">
					    	@csrf
						    <div class="row">
					            <div class="col-md-7">
									<div class="card card-primary card-outline shadow-lg">
										<div class="card-header bg-success text-white">
											<h3>Application Settings</h3>
										</div>
								        <div class="card-body">
					                    	<div class="row">
					                    		<div class="col-sm-6 mb-3">
						                           <label for="site_name" class="col-form-label" style="font-weight: bold;">Site Name :</label>
						                           	<input type="hidden" name="types[]" value="site_name">
						                            <input class="form-control" type="text" name="site_name" id="site_name" placeholder="Write Site name" value="{{ $settings->site_name }}">
						                            @error('site_name')
						                                <p class="text-danger">{{$message}}</p>
						                            @enderror
						                        </div>

						                        <div class="col-sm-6 mb-3">
						                           <label for="phone" class="col-form-label" style="font-weight: bold;">Phone :</label>
						                           <input type="hidden" name="types[]" value="phone">
						                            <input class="form-control" type="text" name="phone" id="phone" placeholder="Write phone" value="{{ $settings->phone }}">
						                            @error('phone')
						                                <p class="text-danger">{{$message}}</p>
						                            @enderror
						                        </div>

						                        <div class="col-sm-6 mb-3">
						                           <label for="email" class="col-form-label" style="font-weight: bold;">Support Email :</label>
						                           <input type="hidden" name="types[]" value="email">
						                            <input class="form-control" type="text" name="support_email" id="email" placeholder="Write support email" value="{{ $settings->support_email }}">
						                            @error('email')
						                                <p class="text-danger">{{$message}}</p>
						                            @enderror
						                        </div>
						                        <div class="col-sm-6 mb-3">
						                           <label for="email" class="col-form-label" style="font-weight: bold;">Email :</label>
						                           <input type="hidden" name="types[]" value="email">
						                            <input class="form-control" type="text" name="email" id="email" placeholder="Write email" value="{{ $settings->email }}">
						                            @error('email')
						                                <p class="text-danger">{{$message}}</p>
						                            @enderror
						                        </div>
					                    	</div>
					                    	<!-- Row End -->
					                    	<div class="row">

								        		      <div class="col-sm-12 mb-3">
						                           <label for="business_address" class="col-form-label" style="font-weight: bold;">Address</label>
						                           <input type="hidden" name="types[]" value="business_address">
						                           <textarea class="form-control" id="business_address" cols="2" name="business_address" placeholder="Write address here">{{ $settings->business_address }}</textarea>
						                            @error('business_address')
						                                <p class="text-danger">{{$message}}</p>
						                            @enderror
						                        </div>
								        	</div>
								        	<!-- Row End// -->
								        </div>
								        <!-- card body .// -->
								    </div>
								    <!-- card .// --> 

								    <div class="card card-primary card-outline shadow-lg mt-3">
										<div class="card-header bg-success text-white">
											<h3>Social Link Settings</h3>
										</div>
								        <div class="card-body">
								        	<div class="row">
								        		<div class="col-sm-6 mb-3">
						                           <label for="facebook_url" class="col-form-label" style="font-weight: bold;">Facebook link :</label>
						                           <input type="hidden" name="types[]" value="facebook_url">
						                            <input class="form-control" type="text" name="facebook_url" id="facebook_url" placeholder="Write facebook url" value="{{ $settings->facebook_url }}">
						                            @error('facebook_url')
						                                <p class="text-danger">{{$message}}</p>
						                            @enderror
						                        </div>

						                        <div class="col-sm-6 mb-3">
						                           <label for="twitter_url" class="col-form-label" style="font-weight: bold;">Twitter link :</label>
						                           <input type="hidden" name="types[]" value="twitter_url">
						                            <input class="form-control" type="text" name="twitter_url" id="twitter_url" placeholder="Write twitter url" value="{{ $settings->twitter_url }}">
						                            @error('twitter_url')
						                                <p class="text-danger">{{$message}}</p>
						                            @enderror
						                        </div>
						                        <div class="col-sm-6 mb-3">
						                           <label for="linkedin_url" class="col-form-label" style="font-weight: bold;">Linkedin Link :</label>
						                           <input type="hidden" name="types[]" value="linkedin_url">
						                            <input class="form-control" type="text" name="linkedin_url" id="linkedin_url" placeholder="Write linkedin url" value="{{ $settings->linkedin_url }}">
						                            @error('linkedin_url')
						                                <p class="text-danger">{{$message}}</p>
						                            @enderror
						                        </div>

						                        <div class="col-sm-6 mb-3">
						                           <label for="youtube_url" class="col-form-label" style="font-weight: bold;">Youtube Link :</label>
						                           <input type="hidden" name="types[]" value="youtube_url">
						                            <input class="form-control" type="text" name="youtube_url" id="youtube_url" placeholder="Write youtube url" value="{{ $settings->youtube_url }}">
						                            @error('youtube_url')
						                                <p class="text-danger">{{$message}}</p>
						                            @enderror
						                        </div>
						                        
						                        <div class="col-sm-6 mb-3">
						                           <label for="instagram_url" class="col-form-label" style="font-weight: bold;">Instagram Link :</label>
						                           <input type="hidden" name="types[]" value="instagram_url">
						                            <input class="form-control" type="text" name="instagram_url" id="instagram_url" placeholder="Write instagram url" value="{{ $settings->instagram_url }}">
						                            @error('instagram_url')
						                                <p class="text-danger">{{$message}}</p>
						                            @enderror
						                        </div>

						                        <div class="col-sm-6 mb-3">
						                           <label for="pinterest_url" class="col-form-label" style="font-weight: bold;">Pinterest Link :</label>
						                           <input type="hidden" name="types[]" value="pinterest_url">
						                            <input class="form-control" type="text" name="pinterest_url" id="pinterest_url" placeholder="Write pinterest url" value="{{ $settings->pinterest_url }}">
						                            @error('pinterest_url')
						                                <p class="text-danger">{{$message}}</p>
						                            @enderror
						                        </div>

								        	</div>
								        </div>
								    </div>
								    <!-- card //-->

								</div>
								<!-- col-6 //-->
								<div class="col-md-5">
									<div class="card card-primary card-outline shadow-lg">
										<div class="card-header mb-4 bg-success text-white">
											<h3>Logo Settings</h3>
										</div>
								        <div class="card-body">
								        	<div class="row">
								        		<div class="col-sm-12 mb-3">
							                        <div class="mb-2">
										             	<img id="showFavicon" class="rounded avatar-lg" src="{{ asset($settings->site_favicon) }}" alt="No Image" width="100px" height="50px;">
										            </div>
										            <div class="mb-2">
										             	<label for="site_favicon" class="col-form-label" style="font-weight: bold;">Site Favicon</label>
										                <input name="site_favicon" class="form-control" type="file" id="site_favicon">
										                @error('site_favicon')
										                    <p class="text-danger">{{$message}}</p>
										                @enderror
										            </div>
									            </div>

						                        <div class="col-sm-12 mb-3">
							                        <div class="mb-2">
										             	<img id="showImage" class="rounded avatar-lg" src="{{ asset($settings->site_logo) }}" alt="No Image" width="180px" height="100px;">
										            </div>
										            <div class="mb-2">
										             	<label for="image" class="col-form-label" style="font-weight: bold;">Site Logo</label>

										                <input name="site_logo" class="form-control" type="file" id="image">
										                @error('site_logo')
										                    <p class="text-danger">{{$message}}</p>
										                @enderror
										            </div>
									            </div>

									            <div class="col-sm-12 mb-3">
							                        <div class="mb-2">
										             	<img id="showFooter" class="rounded avatar-lg" src="{{ asset($settings->site_footer_logo) }}" alt="No Image" width="180px" height="100px;">
										            </div>
										            <div class="mb-2">
										             	<label for="site_footer_logo" class="col-form-label" style="font-weight: bold;">Site Footer Logo</label>

										                <input name="site_footer_logo" class="form-control" type="file" id="site_footer_logo">
										                @error('site_footer_logo')
										                    <p class="text-danger">{{$message}}</p>
										                @enderror
										            </div>
									            </div>
									            
									           

								        	</div>
								        	<!-- row //-->
								        </div>
								    </div>
								    <!-- card //-->
								</div>
							</div>
							<div class="row mb-4 justify-content-sm-end mr-4">
								<input type="submit" class="btn btn-primary" value="Update">
							</div>
						</form>
						<!-- .row // --> 
					</div>
				</div>
			</div>
@endsection
