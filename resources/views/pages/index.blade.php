@extends('layouts.app')

@section('tile', 'CRUD Laravel')

@section('content')

    @include('pages.components.header')

    <div class="container">
        <div class="row">
            <div class="col-md-1">
                
            </div>
            <div class="col-md-10">
                
                @auth
                @if ($errors->any())
                <div class="alert alert-dark alert-dismissible fade show" role="alert">
                    <strong>Wait a minute!</strong> You should fill out all the fields.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                    @include('pages.forms.create')
                    <table class="table mt-5">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Date of Birth</th>
                                <th scope="col">Phone Number</th>
                                <th>
                                    <button type="button" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                        data-bs-target="#createRegister">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                                        </svg>
                                    </button>
                                </th>
                            </tr>
                        </thead>
                        <tbody>


                            @foreach ($employees as $key => $emp)
                                <tr>
                                    <td scope="col">{{ ++$key }}</td>
                                    <td scope="col">{{ $emp->emp_name }}</td>
                                    <td scope="col">{{ date('d/m/Y', strtotime($emp->dob)) }}</td>
                                    <td scope="col">{{ $emp->phone }}</td>
                                    <td scope="col">

                                        <button type="button" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                            data-bs-target="#edit-{{ $emp->id }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z" />
                                            </svg>
                                        </button>

                                        @include('pages.forms.update')

                                        <button type="button" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                            data-bs-target="#destroy-{{ $emp->id }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black"
                                                class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
                                            </svg>
                                        </button>

                                        @include('pages.forms.delete')
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>                   
                @else
                <div class="d-flex h-100 text-center text-white bg-dark">
                    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">       
                      <main class="mt-5 pt-5">
                        <h1>It's seems you're not logged :(</h1>
                        <p class="lead">To access the Database content and all CRUD functions, Create an account or Sign in! <br>
                            When you're logged, you can only access your own registers. <br>
                            Have fun!
                        </p>
                      </main>
                    </div>                                       
                </div>
                @endauth
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        .form-area {
            border: 1px solid #495057;
            padding: 20px;
            border-radius: 1em;
        }
    </style>
@endpush
