@extends('layouts.app')

@section('content')
<div class="container-lg">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Contacts') }}
                    <button type="button" class ="btn float-end"data-bs-toggle="modal" data-bs-target="#exampleModal" {{'contact.create'}}> Add Contact</button>
                </div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- {{ __('You are logged in!') }} --}}
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Comapny</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                            @forelse ($contacts as $contact)
                            <tr>
                                <td>{{$contact->name}}</td>
                                <td>{{$contact->company}}</td>
                                <td>{{$contact->phone}}</td>
                                <td>{{$contact->email}}</td>
                                <td>
                                    <form action="{{ route('contact.update', $contact->id) }}" method="POST">
                                        <a class="btn btn-success btn-sm" href="{{ route('contact.edit', $contact->id) }}"><i class="fa-solid fa-list"></i> Update</a>
                                        <a class="btn btn-primary btn-sm" href="{{ route('contact.destroy', $contact->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                    </form>    
                                </td>
                            </tr>
                            @empty
                            <td>No contact found</td>
                            @endforelse
                            {{-- {{$contacts->links()}} --}}
                        </tbody>
                      </table>
                      {{$contacts->links()}}
                      <!-- MODAL -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Add Contact</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('contact.store')}}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">Name</label>
                                      <input type="text" class="form-control" name="name" id="name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Company</label>
                                        <input type="text" class="form-control" name="company" id="company" required>
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Phone</label>
                                        <input type="text" class="form-control" name="phone" id="phone" required>
                                      </div>
                                    <div class="mb-3">
                                      <label for="exampleInputPassword1" class="form-label">Email</label>
                                      <input type="email" class="form-control" name="email" id="email" required>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                    </div>
                                  </form>
                            </div>
                            {{-- <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div> --}}
                          </div>
                        </div>
                      </div>
                    <!-- MODAL -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
