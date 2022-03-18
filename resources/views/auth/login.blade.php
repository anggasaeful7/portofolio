
    <x-app-layout>
        @slot('title')
            Login Page
        @endslot

        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header">Login</div>
                        <div class="card-body">
                            <form action="{{  route('login')  }}" method="post">
                                @csrf
                                <div class="mb-4">
                                    <label for="email" class="label-form">Email: </label>
                                    <input type="email" name="email" id="" class="form-control" value="{{ old('email') }}">
                                    @error('email')
                                        <div class="text-danger mt-2">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="password" class="label-form">Password: </label>
                                    <input type="password" value="{{ old('password') }}" name="password" id="" class="form-control">
                                    @error('password')
                                        <div class="text-danger mt-2">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-success">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </x-app-layout>
