@extends('layouts.app')

@section('content')
    <div class="container-fluid vh-100">
        <div class="row h-50 border-bottom border-primary mx-1">
            <div class="col-sm-4 border-right border-primary">
                <h3 class="text-left">Upcoming Tasks</h3>
                <div class="row">
                    <div class="col-5"><h6>{{ 'Description' }}</h6></div>
                    <div class="col-5"><h6>{{ 'Time' }}</h6></div>
                </div>
                @foreach($tasks as $task)
                    <div class="row">
                        <div class="col-5">
                            <a class="card-link"
                               href="{{ route('tasks.edit', $task->id) }}">{{ $task->description }}</a>
                        </div>
                        <div class="col-5"><p>{{ $task->time }}</p></div>
                        <div class="col-2">
                            <form method="post" action="{{ route('tasks.destroy', $task->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Are you sure?')">
                                    X
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
                <a class="btn" href="{{ route('tasks.create') }}">Add</a>
            </div>
            <div class="col-sm-3">
                <h3 class="text-left">Twitter</h3>
                <div class="media mb-4">
                    <img class="mr-3"
                         src="https://files.softicons.com/download/system-icons/windows-8-metro-invert-icons-by-dakirby309/ico/Internet%20Shortcuts%20&%20Manufacturers/Twitter%20alt%202.ico"
                         width="32" height="32" alt="Generic placeholder image">
                    <div class="media-body">
                        <h6 class="mt-0">Twitter Account 1</h6>
                        Fusce condimentum nunc ac nisi vulputate fringilla.
                    </div>
                </div>
                <div class="media mb-4">
                    <img class="mr-3"
                         src="https://files.softicons.com/download/system-icons/windows-8-metro-invert-icons-by-dakirby309/ico/Internet%20Shortcuts%20&%20Manufacturers/Twitter%20alt%202.ico"
                         width="32" height="32" alt="Generic placeholder image">
                    <div class="media-body">
                        <h6 class="mt-0">Twitter Account 2</h6>
                        Fusce condimentum nunc ac nisi vulputate fringilla.
                    </div>
                </div>
                <div class="media mb-4">
                    <img class="mr-3"
                         src="https://files.softicons.com/download/system-icons/windows-8-metro-invert-icons-by-dakirby309/ico/Internet%20Shortcuts%20&%20Manufacturers/Twitter%20alt%202.ico"
                         width="32" height="32" alt="Generic placeholder image">
                    <div class="media-body">
                        <h6 class="mt-0">Twitter Account 3</h6>
                        Fusce condimentum nunc ac nisi vulputate fringilla.
                    </div>
                </div>

            </div>
            <div class="col-sm-5 text-center">
                <h3 class="text-right">{{ \Carbon\Carbon::now()->format('l\\, jS \\of F Y') }}</h3>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="https://picsum.photos/id/774/300/128" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-left">Card title</h5>
                                <p class="card-text text-left">Some quick example text to build on the card title and
                                    make up the
                                    bulk of the card's content.</p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">{{\Carbon\Carbon::now()->toDateString()}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="https://picsum.photos/id/11/300/128" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-left">Card title</h5>
                                <p class="card-text text-left">Some quick example text to build on the card title and
                                    make up the
                                    bulk of the card's content.</p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">{{\Carbon\Carbon::now()->toDateString()}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row h-50 mx-1">
            <div class="col-sm-4 text-center border-right border-primary">
                <h3 class="text-left">Heading</h3>
                <div class="row mb-4">
                    <div class="col border-left border-primary">
                        <h6 class="text-left">Some Text</h6>
                        <p class="text-left">There are many variations of passages of Lorem Ipsum available.</p>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col border-left border-primary">
                        <h6 class="text-left">Some Text</h6>
                        <p class="text-left">There are many variations of passages of Lorem Ipsum available.</p>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col border-left border-primary">
                        <h6 class="text-left">Some Text</h6>
                        <p class="text-left">There are many variations of passages of Lorem Ipsum available.</p>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col border-left border-primary">
                        <h6 class="text-left">Some Text</h6>
                        <p class="text-left">There are many variations of passages of Lorem Ipsum available.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-8 text-center">
                <h3 class="text-left">Turnover Plan</h3>

                <h6>Group 1</h6>
                <div class="progress mb-4">
                    <div class="progress-bar bg-primary" style="width:70%"></div>
                    <div class="progress-bar bg-secondary" style="width:10%"></div>
                    <div class="progress-bar bg-dark" style="width:20%"></div>
                </div>

                <h6>Group 2</h6>
                <div class="progress mb-4">
                    <div class="progress-bar bg-primary" style="width:60%"></div>
                    <div class="progress-bar bg-secondary" style="width:15%"></div>
                    <div class="progress-bar bg-dark" style="width:25%"></div>
                </div>

                <h6>Group 3</h6>
                <div class="progress mb-4">
                    <div class="progress-bar bg-primary" style="width:50%"></div>
                    <div class="progress-bar bg-secondary" style="width:25%"></div>
                    <div class="progress-bar bg-dark" style="width:25%"></div>
                </div>

                <h6>Group 4</h6>
                <div class="progress mb-4">
                    <div class="progress-bar bg-primary" style="width:45%"></div>
                    <div class="progress-bar bg-secondary" style="width:30%"></div>
                    <div class="progress-bar bg-dark" style="width:25%"></div>
                </div>

                <h6>Total</h6>
                <div class="progress mb-4">
                    <div class="progress-bar bg-primary" style="width:56%"></div>
                    <div class="progress-bar bg-secondary" style="width:20%"></div>
                    <div class="progress-bar bg-dark" style="width:24%"></div>
                </div>

            </div>
        </div>
    </div>
@endsection
