
    <x-app-layout>
        @slot('title')
            Edit Task Page
        @endslot
    
    <div class="container">
        <div class="text-center mb-5">
            <h3>List Update</h3>
            <center><hr width="500px"></center>
        </div>
        
        <form class="row g-3 mr-5" action="{{  route('task.update', $tasks->id)  }}" method="post">
            @method('put')
            @csrf
            <div class="col-auto align-items-center">
                <label for="listName"><h4>List Name</h4></label>
            </div>
            <div class="col-auto">
                <input type="text" class="form-control @error('list') is-invalid @enderror" value="{{ old('list',  $tasks->list)  }}" name="list">
                @error('list')
                    <span class="invalid-feedback">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-warning mb-3">Update</button>
                <a href="{{  route('task.index')}}" class="btn btn-primary mb-3">Back</a>
            </div>
        </form>
    </div>
    

    </x-app-layout>
