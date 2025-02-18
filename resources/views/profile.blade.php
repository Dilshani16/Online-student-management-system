@include('header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>

    <style>
        .delete{
            margin-left: 920px;
        }
    </style>

</head>
<body>
    <div>
        <section style="background-color: #eee;">
            <div class="container py-5">
              <div class="row">
                <div class="col">
                  <nav aria-label="breadcrumb" class="bg-body-tertiary rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                      <li class="breadcrumb-item">{{$user->first_name}}  {{$user->last_name}}</li>

                    </ol>
                  </nav>
                </div>
              </div>

              <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img
                                src="{{ $user->image ? asset('uploads/' . $user->image) : 'https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp' }}"
                                alt="avatar"
                                class="rounded-circle img-fluid"
                                style="width: 150px;"
                            >
                            <div class="d-flex justify-content-center mb-2 mt-3">
                                <form action="{{ route('update_photo',$user->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" name="image" class="form-control mb-2" style="display: none;" id="fileInput">
                                    <button type="button" class="btn btn-primary" onclick="document.getElementById('fileInput').click();">
                                        Change Photo
                                    </button>
                                    <button type="submit" class="btn btn-success">
                                        Upload
                                    </button>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>




                <div class="container">
                    <div class="row justify-content-center">
                      <div class="col-lg-8">
                        <div class="card mb-4">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-sm-3">
                                <p class="mb-0">First Name</p>
                              </div>
                              <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$user->first_name}}</p>
                              </div>
                            </div>
                            <hr>
                            <div class="row">
                              <div class="col-sm-3">
                                <p class="mb-0">Last Name</p>
                              </div>
                              <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$user->last_name}}</p>
                              </div>
                            </div>
                            <hr>
                            <div class="row">
                              <div class="col-sm-3">
                                <p class="mb-0">Email</p>
                              </div>
                              <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$user->email}}</p>
                              </div>
                            </div>
                            <hr>
                            <div class="row">
                              <div class="col-sm-3">
                                <p class="mb-0">Position</p>
                              </div>
                              <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$user->position}}</p>
                              </div>
                            </div>
                            <hr>

                            <div class="row">
                              <div class="col-sm-3">
                                <p class="mb-0">Mobile</p>
                              </div>
                              <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$user->contact_no}}</p>
                              </div>
                            </div>
                            <hr>
                            <div class="row">
                              <div class="col-sm-3">
                                <p class="mb-0">Address</p>
                              </div>
                              <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$user->address}}</p>
                              </div>
                            </div>
                            <hr>
                            <div class="row">
                              <div class="col-sm-3">
                                <p class="mb-0">Username</p>
                              </div>
                              <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$user->username}}</p>
                              </div>
                            </div>
                            <a href="{{route('staff.editDeatail', $user->id)}}" class="btn btn-primary mt-3" style="float: right">Edit Details</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="container">
                    <div class="row justify-content-center">
                      <div class="col-lg-8">
                        <div class="card mb-4 mb-lg-0">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-sm-3">
                                <p class="mb-0">Password</p>
                              </div>
                              <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$user->password}}</p>
                              </div>
                            </div>
                            <a href="{{route('staff.password', $user->id)}}" class="btn btn-primary mt-3" style="float: right">Change password</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="container">
                  <a class="btn btn-danger mt-5 delete" href="{{route('staff.delete',$user->id)}}"> Delete Account</a>
                  </div>
            </div>
          </section>
    </div>

</body>
</html>

@include('footer')
