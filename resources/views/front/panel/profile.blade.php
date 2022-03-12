@extends('layout.user-dashboard')
@section('title', 'Lance Master | Home Page')

@section('content')
    <section class="portal">

        <div class="heading">
            <h2>
                CREATOR DASHBOARD
            </h2>
        </div>
        <div class="dashContent">
            <!-- <div class="box1">
                <div>
                    @if ($user->profile != null)

                        <img src="{{ asset($user->profile->profile_image) }}" alt="User profile picture">
                    @else
                        <img src="{{ asset('assets/front/images/user1.png') }}" alt="..." srcset="">
                    @endif
                </div>
                <div>
                    <p class="boxLight">
                    <ul class="list">
                        <li>
                            {{ sizeof($user->subscribedTo) }}
                            <br>
                            Following
                        </li>
                        <li>
                            {{ sizeof($user->subscribers) }}
                            <br>
                            Followers
                        </li>
                    </ul>
                    </p>
                </div>
            </div>
            <div class="s_box">
                <div>
                    <p class="boxBold">
                        Profile Details
                    </p>

                    <div class="user-details">
                        <div class="row">
                            <p class="col-6"><strong>Name : </strong></p>
                            <p class="col-6">{{ $user->name }}</p>
                        </div>
                        <div class="row">
                            <p class="col-6"><strong>Email : </strong></p>
                            <p class="col-6">{{ $user->email }}</p>
                        </div>
                        <div class="row">
                            <p class="col-6"><strong>Contact : </strong></p>
                            <p class="col-6">{{ $user->phone_number }}</p>
                        </div>
                        @if ($user->profile != null)

                            <div class="row">
                                <p class="col-6"><strong>Location : </strong></p>
                                <p class="col-6">{{ $user->profile->location }}</p>
                            </div>
                        @endif

                    </div>

                </div>
                <div class="dashBtn">
                    <a href="{{ route('user.editProfile', $user->id) }}" class="btn btn-primary d-block m-auto">
                        Edit Profile
                    </a>
                    {{-- <button class="button">
                        Edit Profile
                    </button> --}}
                </div>
            </div> -->
        </div>
    </section>
@endsection
