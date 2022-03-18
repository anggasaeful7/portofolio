
    <x-app-layout>
        @slot('title')
            Task Page
        @endslot
    <!-- <h1>List Task</h1>
    <hr style="width:170px;">
    <br>
    <form action="/task" method="post">
        @csrf
        <input type="text" name="list" placeholder="Masukkan nama task">
        <button type="submit">Add</button>
    </form>
    <br>
    <ul style="margin-left: 50px; list-style-type: none;">
        @foreach($tasks as $index => $task)
        <li>{{ $index+1 }} - {{ $task->list }}    -    <a href="task/{{ $task->id }}/edit">Edit</a> - <form action="task/{{ $task->id }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Delete</button>
        </form></li>
        @endforeach
    </ul> -->

    <center>
    <div class="container  justify-content-center">
        <div class="col-8 d-flex">
            <div class="card">
                <div class="card-header">
                    <h3>List Task</h3>
                </div>
                <div class="card-body">
                    <form action="{{  route('task.store')  }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">List Name:</label>
                            <input type="text" class="form-control @error('list') is-invalid @enderror" id="recipient-name" name="list" placeholder="Masukkan nama list" value="{{ old('list') }}">
                            @error('list')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3 d-flex justify-content-end">
                            <button class="btn btn-primary me-2" type="submit">Add</button>
                        </div>
                    </form>

                    <!-- List Name -->
                    <ul class="list-group mt-4">
                    @foreach($tasks as $index => $task)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $index+1 }} - {{ $task->list }}
                            <div class="d-flex">
                                <a class="btn btn-warning me-2" href="{{  route('task.edit', $task->id)  }}">Edit</a>
                                <form action="{{  route('task.destroy', $task->id)  }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                    </ul>
                    <!-- End List -->
                </div>
            </div>
        </div>
    </div>
    </center>
        
    </x-app-layout>
