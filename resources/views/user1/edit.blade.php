<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Edit Users</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src='main.js'></script>
</head>
<body>
<div class="layout">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                 <div class="alert alert-success">{{session('status')}}</div>

                 
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Users
                            <a href="{{ url('user1')}}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('user1/'.$user1->id.'/edit') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" value="{{ $user1->name }}" class="form-control" />
                            
                            @error('name') <span class="text-danger">{{ $message}}</span> @enderror
                             </div>

                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" value="{{ $user1->email }}" class="form-control" />
                                @error('email') <span class="text-danger">{{ $message}}</span> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="username">Username</label>
                                <input type="text" id="username" name="username" value="{{ $user1->username }}" class="form-control" />
                                @error('username') <span class="text-danger">{{ $message}}</span> @enderror
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
