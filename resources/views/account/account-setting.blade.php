@extends('account.master')
@section('content')
    <div class="content">
        <div class="container">
            <div class="col-sm-12">
                <h4 class="text-account-panel"> <i class="fa fa-cog"></i> {{ __('messages.AccountPanel') }}</h4>
                <div class="account-user">
                    <h4>{{ __('messages.welcome') }}, {{ str_word_count($user->name, 1)[0] }}</h4>
                    <p id="free">{{ __('messages.AccountType') }} : <span>
                            @if ($user->type_user == 1)
                                {{ __('messages.normalUser') }}
                            @elseif ($user->type_user == 2)
                                {{ __('messages.dealer') }}
                            @else
                                {{ __('messages.showroom') }}
                            @endif
                        </span></p>
                </div>
            </div>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="ads-tab" data-toggle="tab" href="#ads" role="tab" aria-controls="ads"
                        aria-selected="false">{{ __('messages.ads') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="personalProfile" data-toggle="tab" href="#personal-profile" role="tab"
                        aria-controls="personal-profile" aria-selected="true">{{ __('messages.PersonalProfile') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="favorites-tab" data-toggle="tab" href="#favorites" role="tab"
                        aria-controls="favorites" aria-selected="false">{{ __('messages.favorites') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="trashed-tab" data-toggle="tab" href="#trashed" role="tab"
                        aria-controls="trashed" aria-selected="false">{{ __('messages.trashed') }}</a>
                </li>

            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade" id="personal-profile" role="tabpanel" aria-labelledby="personalProfile">
                    <h4 class="text-profile">Profile</h4>
                    <form action="{{ route('settings.update' , Auth::user()->id) }}" method="POST" enctype="multipart/form-data" >
                    @method('put')
                    @csrf
                        <div class="row">
                        <div class="col-md-5">
                                <div class="form-group">
                                    <label> Full Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Your full name..."
                                        value="{{ Auth::user()->name }}">
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <div class="form-row">

                                        <div class="col-8" style="padding: 0;">
                                            <input type="text" class="form-control" name="mobile" placeholder="Your phone number..."
                                                value="{{ old('mobile' , Auth::user()->mobile) }}">
                                            <small class="text-muted">
                                                مثال: 50123456(971+)
                                            </small>
                                        </div>

                                        <div class="col-4" style="padding: 0;">
                                            <select class="js-example-basic-single form-control" name="phonecode" style="width: 100%">
                                                <option @if(Auth::user()->phonecode == '971') selected @endif value="971">+971 - UAE</option>
                                                <option @if(Auth::user()->phonecode == '966') selected @endif  value="966">+966 - KSA</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" 
                                        aria-describedby="emailHelp" name="email" placeholder="Enter email"
                                        value="{{ Auth::user()->email }}">
                                    
                                </div>
                        </div>
                        <div class="offset-md-1" style="border-left: 1px solid #ccc; margin: 0 80px;"></div>
                        <div class="col-md-5">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label style="font-size: 14px; font-weight: 700;">Profile image</label>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-8 col-md-6 col-lg-5">
                                            <div class="form-group"><a id="img_profile">
                                                    <div class="img-profile" data-toggle="modal"
                                                        name="modal_upload"
                                                        data-target="#modal_upload"
                                                        style="background-image: url({{ asset(Auth::user()->avatar) }})">
                                                    </div>
                                                    {{-- <img src="{{ asset( Auth::user()->avatar) }}"> --}}
                                                    <div class="camera-icon" data-toggle="modal" name="modal_upload"
                                                        data-target="#modal_upload"><i class="fa fa-camera fa-lg"></i><span
                                                            class="hidden-xs">&nbsp;&nbsp;Upload image</span></div>
                                                </a></div>
                                        </div>
                                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-5 bottom-column col-phone--right control-upload"
                                            style="display: none">
                                            <button class="btn btn-gray btn-sm btn-block"
                                                id="btn_remove_image">Remove</button>
                                            <div class="form-group">
                                                <button class="btn btn-base btn-sm btn-block" data-toggle="modal"
                                                    data-target="#modal_crop_image">Edit image</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 text-center save-change-container">
                            <button class="btn btn-base btn-md">Save changes</button>
                        </div>
                    </div>
                </form>
                    <hr>
                    <form action="{{ route('setting.changePassword') }}" method="POST">
                        @csrf
                    <h4 class="text-profile">Password</h4>
                    <div class="row">
                        <div class="col-md-5">
                                <div class="form-group">
                                    <input type="hidden" class="form-control" id="id" name="id" value="{{ Auth::user()->id }}">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="password" data-fv-field="">
                                    <input style="margin-top: 20px" type="password" class="form-control"  name="password_confirmation" placeholder="password confirmation" data-fv-field="">
                                </div>
                                <div class="col-md-12 text-center save-change-container">
                                    <button class="btn btn-base btn-md">change password</button>
                                </div>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="favorites" role="tabpanel" aria-labelledby="favorites-tab">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="advert">
                                <div class="image">
                                    <img src="images/small-golf.png" alt="car">
                                </div>
                                <div class="info">
                                    <div class="title">
                                        <h6>مرسيدس بنز جي ال اس</h6>
                                    </div>
                                    <div class="price">
                                        <b>234,500 درهم</b>
                                    </div>
                                    <div class="details">
                                        <div class="location">
                                            <span><i class="fa fa-map-marker-alt"></i></span>
                                            <br>
                                            <span>دبي</span>
                                        </div>
                                        <div class="distance">
                                            <span><i class="fa fa-tachometer-alt"></i></span>
                                            <br>
                                            <span>كم 2446</span>
                                        </div>
                                        <div class="year">
                                            <span><i class="fa fa-cog"></i></span>
                                            <br>
                                            <span>2019</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="un-favorite">
                                    <button class="btn">
                                        <span><i class="fa fa-trash-alt"></i></span>
                                        حذف من المفضلة
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show active" id="ads" role="tabpanel" aria-labelledby="ads-tab">
                    <div class="container-xl">
                        <div class="table-responsive" style="overflow: hidden">
                            <div class="table-wrapper">
                                <div class="table-title">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h2>{{ __('messages.manageAds') }}</h2>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{ __('messages.ad') }}</th>
                                            <th>{{ __('messages.created_at') }}</th>
                                            <th>{{ __('messages.status') }}</th>
                                            <th>{{ __('messages.action') }}</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($ads as $key => $ad)
                                            <tr id="{{ $ad->id }}" class="ads-item">
                                                <td>{{ $key + 1 }}</td>
                                                <td><a href="#">{{ $ad->title }}</a>
                                                </td>
                                                <td>{{ $ad->created_at->toDateString() }}</td>
                                                <td>
                                                    @if ($ad->status == 0)
                                                        <span class="badge badge-danger">Disabled</span>
                                                    @elseif ($ad->status == 1)
                                                        <span class="badge badge-success">Active</span>
                                                    @else
                                                        <span class="badge badge-warning">In Progress</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('ads-car.show', $ad->id) }}" class="view"
                                                        title="View" data-toggle="tooltip"><i
                                                            class="material-icons">&#xE417;</i></a>
                                                    <a href="{{ route('ads-car.edit', $ad->id) }}" class="edit"
                                                        title="Edit" data-toggle="tooltip"><i
                                                            class="material-icons">&#xE254;</i></a>
                                                    <a class="delete" style="cursor: pointer;" title="Delete"
                                                        data-toggle="tooltip"
                                                        onclick="return messageDelete({{ $ad->id }});"><i
                                                            class="material-icons">&#xE872;</i></a>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="trashed" role="tabpanel" aria-labelledby="trashed-tab">
                    <div class="container-xl">
                        <div class="table-responsive" style="overflow: hidden">
                            <div class="table-wrapper">
                                <div class="table-title">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h2>Manage <b>Your Ads</b></h2>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>ADS</th>
                                            <th>Deleted&nbsp;at</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($trashed as $key => $ad)
                                            <tr id="{{ $ad->id }}" class="ads-item">
                                                <td>{{ $key + 1 }}</td>
                                                <td><a href="#">{{ $ad->title }}</a>
                                                </td>
                                                <td>{{ $ad->deleted_at->toDateString() }}</td>
                                                <td>
                                                    <span class="badge badge-danger">Deleted</span>
                                                </td>
                                                <td>
                                                    <a href="{{ route('ads-car.show', $ad->id) }}"
                                                        class="view" title="View" data-toggle="tooltip"><i
                                                            class="material-icons">&#xE417;</i></a>

                                                    <a class="delete" style="cursor: pointer;" title="Delete"
                                                        data-toggle="tooltip"
                                                        onclick="return messageRestore({{ $ad->id }});"><i
                                                            class="material-icons">restore_from_trash</i></a>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Confirm Delete -->
    <div class="modal fade modal-account" id="confirmDelete" tabindex="-1" role="dialog" data-backdrop="static"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" style="display: flex;
                            justify-content: space-evenly;">
            <div class="modal-content" style="width: 65%">
                <div class="modal-header modal-header-account">
                    <h5 class="modal-title" id="exampleModalLongTitle">هل تريد حذف الإعلان؟</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modal-body">
                    {{-- <div style="margin: 0 auto; text-align:center;">أعلن على موقع أوتو مارك مجاناً</div> --}}
                    <button class="btndelete cancelbtn" id="softDelete" data-target="continue" onclick="">تأكيد</button>

                    <button class="btndelete deletebtn" type="button" data-target="cancel" data-dismiss="modal"
                        aria-label="Close">إلغاء</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Confirm Restore -->
    <div class="modal fade modal-account" id="confirmRestore" tabindex="-1" role="dialog" data-backdrop="static"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" style="display: flex;
                            justify-content: space-evenly;">
            <div class="modal-content" style="width: 65%">
                <div class="modal-header modal-header-account">
                    <h5 class="modal-title" id="exampleModalLongTitle">هل تريد إعادة عرض الإعلان؟</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modal-body">
                    {{-- <div style="margin: 0 auto; text-align:center;">أعلن على موقع أوتو مارك مجاناً</div> --}}
                    <button class="btndelete cancelbtn" id="restore" data-target="continue" onclick="">تأكيد</button>

                    <button class="btndelete deletebtn" type="button" data-target="cancel" data-dismiss="modal"
                        aria-label="Close">إلغاء</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('pagescript')
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });

        function messageDelete(id) {
            $("#softDelete").attr('onclick', 'deletesoft(' + id + ')');
            $('#confirmDelete').modal('show');
        }

        function deletesoft(id) {
            $('#confirmDelete').modal('hide');
            id = parseInt(id);
            $.ajax({
                url: "ads-car/" + id,
                type: "POST",
                data: {
                    // "@method('delete')",
                    _token: '{{ csrf_token() }}',
                    _method: "delete",
                },
                dataType: 'json',
                success: function(result) {
                    $("#" + id).remove();
                }
            });
        }

        function messageRestore(id) {
            $("#restore").attr('onclick', 'restore(' + id + ')');
            $('#confirmRestore').modal('show');
        }

        function restore(id) {
            $('#confirmRestore').modal('hide');
            id = parseInt(id);
            $.ajax({
                url: "ads-car/" + id + "/restore",
                type: "POST",
                data: {
                    _token: '{{ csrf_token() }}',
                },
                dataType: 'json',
                success: function(result) {
                    $("#" + id).remove();
                }
            });
        }
    </script>
@endsection
