
    <x-app-layout>
        @slot('title')
            Home Page
        @endslot

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Holy guacamole! </strong>{{ session()->get('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session()->has('logout'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Holy guacamole! </strong>{{ session()->get('logout') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">Welcome to My Site!</div>
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit ad aut autem cupiditate quo qui? Blanditiis atque architecto voluptatem laborum praesentium exercitationem eaque nobis fugit ut pariatur, alias odit placeat.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit perspiciatis corrupti dolor corporis assumenda quia, accusamus qui delectus accusantium consectetur nesciunt culpa beatae molestiae fuga illum animi enim pariatur laborum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </x-app-layout>
