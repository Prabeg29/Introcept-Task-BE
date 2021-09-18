<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Introcept Backend Task</title>
</head>
<body>
    <div class="container">
        <h2>Form</h2>

        <!-- Flash message -->
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
        <form action="{{ route('form.submit') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter your name" value="{{old('name')}}">
                <!-- Error -->
                @if ($errors->has('name'))
                    <div>
                        {{$errors->first('name')}}
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Enter your email" value="{{old('email')}}">

                <!-- Error -->
                @if($errors->has('email'))
                    <div>
                        {{$errors->first('email')}}
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Phone</label>
                <input type="text" class="form-control" name="phone" placeholder="Enter your number" value="{{old('phone')}}">

                <!-- Error -->
                @if($errors->has('phone'))
                    <div>
                        {{$errors->first('phone')}}
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Gender: </label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="male" checked>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Male
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="female">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Female
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="others">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Others
                    </label>
                </div>
            </div>

            <div class="mb-3">
                <label for="name">Hobbies: </label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="reading" id="flexCheckDefault" name="hobby1">
                    <label class="form-check-label" for="flexCheckDefault">
                        Reading
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="travelling" id="flexCheckChecked" name="hobby2">
                    <label class="form-check-label" for="flexCheckChecked">
                        Travelling
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="listening to music" id="flexCheckChecked" name="hobby3">
                    <label class="form-check-label" for="flexCheckChecked">
                        Listening to music
                    </label>
                </div>
            </div>

            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>
</html>
